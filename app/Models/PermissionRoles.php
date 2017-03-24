<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRoles extends Model
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
    protected $table = 'permission_role';


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
        'user_id',
        'role_id',
    ];


}
