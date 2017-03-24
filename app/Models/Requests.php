<?php

namespace App\Models;

use App\Models\RequestStatuses;
use App\Traits\FilterableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requests extends Model
{
    /**
     * Included traits
     *
     */
    use FilterableTrait;
    use SoftDeletes;


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
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'request_type',
    ];


    /**
     * Filtering attributes.
     *
     * @var array
     */
    protected $filterable = [
        'user_id',
        'request_type',
    ];

}
