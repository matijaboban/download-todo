<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequestStatuses extends Model
{
    /**
     * Included model traits
     *
     */
    use SoftDeletes;


    /**
     * Protected attributes.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_id',
        'status_id',
        'note',
    ];


    public static function handleStatuses(array $requestInputs, $id)
    {
        $status = RequestStatuses::create([
            'request_id'    => $id,
            'status_id'     => $requestInputs['status_id'],
            'note'          => isset($requestInputs['note']) ? $requestInputs['note'] : '',
            ]);

        return $status;
    }


    /**
     * Request status log
     *
     * This attribute function compiles full request status log
     * with the latest (current) status as the first item.
     *
     * @var integer $id         Request ID.
     *
     * @return array            Request status log
     */
    public static function getStatusLog(int $id)
    {
        // Retrieve all request statuses
        $statusLog = RequestStatuses::where('request_id', $id)
        ->orderBy('updated_at', 'desc')
        ->get();

        // Process request statuses
        $statusLogArray = [];
        foreach ($statusLog as $item) {
            array_push($statusLogArray, [
                'status_id'     => $item->status_id,
                'note'          => $item->note,
                'updated_at'    => $item->updated_at,
                ]);
        }

        return $statusLogArray;
    }


    /**
     * Request status
     *
     * This function compiles current request status data.
     *
     * @var integer $id         Request ID.
     *
     * @return array            Request status log
     */
    public static function getStatus(int $id)
    {
        // Retrieve all request statuses
        $status = RequestStatuses::where('request_id', $id)
        ->orderBy('updated_at', 'desc')
        ->first();

        return $status;
    }
}
