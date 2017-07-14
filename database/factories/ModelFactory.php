<?php

use \Illuminate\Support\Facades\Crypt;
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

$factory->define(App\Domain\Books\Book::class, function (Faker\Generator $faker) {
    return [
        'tittle' => $faker->title,
        'author' => $faker->name,
        //'api_token' => 'sadaskghdbc64t86r4bt37ryt349rbyewcrn',
        'updated_at' => '2017-07-10 17:46:23',
        'created_at' => '2017-07-10 17:46:23',
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Crypt::encrypt('secret'),
        'api_token' => str_random(20),
        'remember_token' => str_random(10),
    ];
});
