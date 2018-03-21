<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Report::class, function (Faker $faker) {
    return [
        'vehicle' => $faker->word,
        'question' => $faker->sentence(),
        'answer' => $faker->boolean(),
        'uploaded' => $faker->boolean(),
        'timestamp' => $faker->dateTime(),

    ];
});
