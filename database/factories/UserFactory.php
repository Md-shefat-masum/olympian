<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    $saveName = $faker->name;
    return [
        'name' => $saveName,
        'phone' => $faker->phoneNumber,
        'username' => Str::slug($saveName),
        'role_id' => Role::all()->random()->id,
        'email' => $faker->unique()->safeEmail,
        'twitter' => '#',
        'fb' => '#',
        'linkedin' => '#',
        'email_verified_at' => now(),
        'password' => bcrypt('12345678'), // password
        'remember_token' => Str::random(10),
    ];
});
