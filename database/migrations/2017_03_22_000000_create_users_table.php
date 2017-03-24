<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // table scheme: Users
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        // table scheme: Roles
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('label', 45);
            $table->timestamps();
            $table->softDeletes();
        });

        // table scheme: Permissions
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('label', 45);
            $table->timestamps();
            $table->softDeletes();
        });

        // pivot table scheme: User Roles
        Schema::create('user_role', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('role_id')
                ->references('id')->on('roles');
            $table->timestamps();
            $table->softDeletes();
        });

        // pivot table scheme: Permission Roles
        Schema::create('permission_role', function (Blueprint $table) {
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->foreign('permission_id')
                ->references('id')->on('permissions');
            $table->foreign('role_id')
                ->references('id')->on('roles');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('roles');
        Schema::drop('permissions');
        Schema::drop('user_role');
        Schema::drop('permission_role');
    }
}
