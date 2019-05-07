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

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        'summary' => $faker->sentence,
        'description' => $faker->paragraph,
        //'email_verified_at' => now(),
        'status' => $faker->word // secret
        //'remember_token' => str_random(10),
    ];
});