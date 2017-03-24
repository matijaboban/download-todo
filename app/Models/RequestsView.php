<?php

namespace App\Models;

use App\Traits\FilterableTrait;
use App\Models\RequestStatuses;
use App\Models\RequestInputs;
use App\Models\Types;
use Illuminate\Database\Eloquent\Model;

class RequestsView extends Model
{
    /**
     * Included traits
     *
     */
    use FilterableTrait;


    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'requests_view';


    /**
     * Filtering attributes.
     *
     * @var array
     */
    protected $filterable = [
        'user_id',
        'request_type',
        'status',
    ];


    /**
     * The attributes included in model's JSON form.
     *
     * @var array
     */
    protected $appends = [
        'request_inputs',
    ];


    /*
    |------------------------------------------------
    | Model response atributes
    |------------------------------------------------
    */

    /**
     * Request status log atribute
     *
     * This attribute function retrieves full request status log
     * with the latest (current) status as the first item.
     *
     * @return array            Request status log
     */
    public function getStatusLogAttribute()
    {
        return RequestStatuses::getStatusLog($this->id);
    }


    /**
     * Request inputs atribute
     *
     * This attribute function retrieves all requests field inputs.
     *
     * @return array            Request input field definitions and values
     */
    public function getRequestInputsAttribute()
    {
       return $this->getRequestInputs();
    }


    /*
    |------------------------------------------------
    | Model general methods
    |------------------------------------------------
    */

    /**
     * Get single Request
     *
     * This attribute function compiles all requests field inputs.
     *
     * @var integer $id         Request ID.
     *
     * @return array            Request input field definitions and values
     */
    public function getRequest()
    {
        // Retrieve all request inputs
        $request = [
            'id'            => $this->id,
            'user_id'       => $this->user_id,
            'request_type'  => $this->request_type,
            'request_input' => $this->getRequestInputsAttribute(),
            'status'        => $this->status,
            'status_log'    => $this->getStatusLogAttribute(),
            ];

        return $request;
    }


    // /**
    //  * Request status log
    //  *
    //  * This attribute function compiles full request status log
    //  * with the latest (current) status as the first item.
    //  *
    //  * @var integer $id         Request ID.
    //  *
    //  * @return array            Request status log
    //  */
    // public function getStatusLog()
    // {
    //     // Retrieve all request statuses
    //     $statusLog = RequestStatuses::where('request_id', $this->id)
    //     ->orderBy('updated_at', 'desc')
    //     ->get();

    //     // Process request statuses
    //     $statusLogArray = [];
    //     foreach ($statusLog as $item) {
    //         array_push($statusLogArray, [
    //             'status_id'     => $item->status_id,
    //             'note'          => $item->note,
    //             'updated_at'    => $item->updated_at,
    //             ]);
    //     }

    //     return $statusLogArray;
    // }


    /**
     * Request inputs
     *
     * This function compiles all requests field inputs.
     *
     * @var integer $id         Request ID.
     *
     * @return array            Request input field definitions and values
     */
    public function getRequestInputs()
    {
        // Retrieve all request inputs
        $requestInputs = RequestInputs::where('request_id', $this->id)
        ->orderBy('type_field_id', 'asc')
        ->pluck('value','type_field_id');

        // Process request inputs
        $requestInputsArray = [];
        foreach ($requestInputs as $type_field_id => $value) {
            $requestInputsArray[
                Types::getTypeField($this::where('id', $this->id)->first()->request_type, 'field_id', $type_field_id)->name
            ] = $value;
        }

        return $requestInputsArray;
    }
}
