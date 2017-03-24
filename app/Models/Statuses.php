<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Statuses extends Model
{
    /**
     * Included model traits
     *
     */
    use SoftDeletes;


    /**
     * Explicit table name declaration.
     *
     * @var array
     */
    protected $table = 'statuses';


    /**
     * Protected attributes.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


}
