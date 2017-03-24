<?php

namespace App\Models;

use App\Models\Types;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestInputs extends Model
{
    /**
     * Included model traits
     *
     */
    use SoftDeletes;

    protected $primaryKey = 'request_id';


    /**
     * Protected attributes.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_id',
        'type_id',
        'type_field_id',
        'value',
    ];


    public static function handleInputs(array $requestInputs, $id)
    {
        foreach ($requestInputs as $fieldName => $input) {

            // Retrieve field definition for a passed field name
            $fieldDefinition = Types::getTypeField($requestInputs['request_type'], 'name', $fieldName);

            // Process if the fiedl definition exists
            if ( !is_null($fieldDefinition) ) {

                self::updateOrCreate(
                    [
                    'request_id' => $id,
                    'type_field_id' => $fieldDefinition->field_id,
                    'type_id' => $requestInputs['request_type'],
                    ],
                    ['value' => $input]
                );

            }
        }
    }
}
