<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        |------------------------------------------------
        | Status Section
        |------------------------------------------------
        */

        // Table scheme: Statuses
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('label', 120);
            $table->longText('note');
            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |------------------------------------------------
        | Fields Section
        |------------------------------------------------
        */

        // Table scheme: Request Types
        Schema::create('fields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('label', 120);
            $table->longText('note');
            $table->jsonb('attributes')->nullable();
            $table->jsonb('validation')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |------------------------------------------------
        | Types Section
        |------------------------------------------------
        */

        // Table scheme: Request Types
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->string('label', 45);
            $table->longText('note');
            $table->jsonb('fields')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        /*
        |------------------------------------------------
        | Request Section
        |------------------------------------------------
        */

        // Table scheme: Requests
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->integer('request_type')->unsigned();
            $table->foreign('request_type')
                ->references('id')->on('types');
            $table->timestamps();
            $table->softDeletes();
        });


        /*
        |------------------------------------------------
        | Request Status Section
        |------------------------------------------------
        */

        // pivot table scheme: Request Statuses
        Schema::create('request_statuses', function (Blueprint $table) {
            $table->integer('request_id')->unsigned();
            $table->foreign('request_id')
                ->references('id')->on('requests');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')
                ->references('id')->on('statuses');
            $table->mediumText('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });


        /*
        |------------------------------------------------
        | Request Input Section
        |------------------------------------------------
        */

        // pivot table scheme: Request Inputs
        Schema::create('request_inputs', function (Blueprint $table) {
            $table->integer('request_id')->unsigned();
            $table->foreign('request_id')
                ->references('id')->on('requests');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')
                ->references('id')->on('types');
            $table->integer('type_field_id');
            $table->mediumText('value');
            $table->timestamps();
            $table->softDeletes();
        });


        /*
        |------------------------------------------------
        | MySQL View tables
        |------------------------------------------------
        */

        DB::statement( "CREATE VIEW requests_view AS SELECT rq.*, (select status_id from request_statuses WHERE request_statuses.request_id = rq.id ORDER BY `updated_at` DESC LIMIT 1) as 'status'
FROM requests AS rq" );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('statuses');
        Schema::drop('fields');
        Schema::drop('types');
        Schema::drop('requests');
        Schema::drop('request_statuses');
        Schema::drop('request_inputs');
        Schema::drop('requests_view');
    }
}
