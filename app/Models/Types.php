<?php

namespace App\Models;

use App\Models\Fields;
use App\Traits\HelperTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Types extends Model
{
    /**
     * Included model traits
     *
     */
    use HelperTrait;
    use SoftDeletes;


    /**
     * Protected attributes.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'label',
        'note',
        'fields',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'fields' => 'array',
    // ];


    public $validationRules = [];
    public $validationMessages = [];


    /*
    |------------------------------------------------
    | Model general methods
    |------------------------------------------------
    */



    public function getFieldsAttribute()
    {
        // Retrieve request type fields
        // object to array helper is used...
        $requestTypeFields = collect(json_decode($this->attributes['fields'],false));

        foreach ($requestTypeFields as $key => $requestTypeField) {

            // Retrieve base field properties
            $baseFields = array_except(
                            Fields::findOrFail($requestTypeField->field_type_id)->attributes,
                            ['id', 'created_at', 'updated_at', 'deleted_at']
                        );

            // Merge request field definitions with base field definitions
            $requestFieldDefinition = array_replace_recursive(
                $baseFields,
                $this->helper_objectToArray($baseFields),
                $this->helper_objectToArray($requestTypeField)
            );

            // Replace request type field definition with compiled one
            $requestTypeFields[$key] = $requestFieldDefinition;
        }

        return $requestTypeFields;
    }


    /**
     * Get request type field definitions.
     *
     * @var array
     */
    public static function getTypeFields(int $type_id)
    {
        return json_decode(self::findOrFail($type_id)->fields,false);
    }


    // get single type field by parametar
    public static function getTypeField(int $type_id, $parametar = 'field_id', $parametar_value)
    {
        $requestTypeFields = self::findOrFail($type_id);

        $fieldPropeties = collect(json_decode($requestTypeFields->fields,false))
        ->whereIn($parametar, $parametar_value)
        ->first();

        return $fieldPropeties;
    }


    /**
     * Validation rules
     *
     * Compile field validation rules.
     *
     * @var integer $id    Type ID.
     *
     * @return array       Validation rules
     */
    public function validationRules($id)
    {
        // Retrieve the Type model by id
        $type = $this->findOrFail($id);

        // Compile validation rules and messages
        foreach ( json_decode($type->fields) as $field ) {

            $this->validationRules[$field->name] = [];

            // Process "required" validation
            $this->setValidatioForRequired($field);

            // Process field type validation
            $this->setValidatioForFieldType($field);

            // Process "min length" validation
            $this->setValidatioForMinLength($field);

            // Process "max length" validation
            $this->setValidatioForMaxLength($field);
        }

        return [
            'rules'     => $this->processValidationRulesArray($this->validationRules),
            'messages'  => $this->validationMessages,
        ];
    }


    private function setValidatioForRequired($field)
    {
        if ( isset($field->validation->required->rule) ) {
            array_push($this->validationRules[$field->name],'required');
        }

        if ( isset($field->validation->required->message) ) {
            $this->validationMessages[$field->name.'.required'] = $field->validation->required->message;
        }
    }


    private function setValidatioForFieldType($field)
    {
        if ( $field->type == 'text' ) {
        } elseif ( $field->type == 'number' ) {
            array_push($this->validationRules[$field->name],'numeric');
        } elseif ( $field->type == 'url' ) {
            array_push($this->validationRules[$field->name],'url');
        }
    }


    private function setValidatioForMinLength($field)
    {
        if ( isset($field->validation->minlength->rule) ) {
            array_push($this->validationRules[$field->name],'min:'.$field->validation->minlength->rule);
        }

        if ( isset($field->validation->minlength->message) ) {
            $this->validationMessages[$field->name.'.min'] = $field->validation->minlength->message;
        }
    }


    private function setValidatioForMaxLength($field)
    {
        if ( isset($field->validation->maxlength->rule) ) {
            array_push($this->validationRules[$field->name],'max:'.$field->validation->maxlength->rule);
        }

        if ( isset($field->validation->maxlength->message) ) {
            $this->validationMessages[$field->name.'.max'] = $field->validation->maxlength->message;
        }
    }

    private function processValidationRulesArray()
    {
        $validationRules = [];

        foreach ($this->validationRules as $key => $value) {
            $validationRules[$key] = implode('|', $this->validationRules[$key]);
        }

        return $validationRules;
    }
}
