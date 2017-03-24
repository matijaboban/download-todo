<?php

use App\Models\RequestInputs;
use App\Models\RequestStatuses;
use App\Models\Requests;
use App\Models\Statuses;
use App\Models\Types;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

// User seed factory
$factory->define(User::class, function (Faker\Generator $faker) {
    return [
        'name'              => isset($name) ?: $name = $faker->name,
        'email'             => isset($email) ?: $email = $faker->unique()->safeEmail,
        'password'          => isset($password) ?: $password = bcrypt('secret'),
        'remember_token'    => str_random(10),
    ];
});


// Request seed factory
$factory->define(Requests::class, function (Faker\Generator $faker) {
    return [
        'user_id'           => isset($user_id) ?: $user_id = User::inRandomOrder()->first()->id,
        'request_type'      => isset($request_type) ?: $request_type = Types::inRandomOrder()->first()->id,
    ];
});


// Request status seed factory
$factory->define(RequestStatuses::class, function (Faker\Generator $faker) {
    return [
        'request_id'        => isset($request_id) ?: $request_id = Requests::inRandomOrder()->first()->id,
        'status_id'         => isset($status_type) ?: $status_type = Statuses::where('name','requested')->first()->id,
    ];
});


// Request input seed factory
$factory->define(RequestInputs::class, function (Faker\Generator $faker) {
    return [
        'request_id'        => isset($request_id) ?: $request_id = Requests::inRandomOrder()->first()->id,
        'type_id'           => isset($type_id) ?: $type_id = Types::inRandomOrder()->first()->id,
        'type_field_id'     => isset($type_field_id) ?: $type_field_id = 1,
        'value'             => isset($value) ?: $value = $faker->realText($maxNbChars = 200),
    ];
});
