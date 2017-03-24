<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRoles extends Model
{
    /**
     * Included model traits
     *
     */
    use SoftDeletes;


    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'user_role';

    protected $primaryKey = 'user_id';


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
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'label',
    ];


}
