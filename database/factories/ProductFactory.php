<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->text(60),
        'description' => $faker->paragraph(),
        'price' => $faker->numberBetween(100,10000),
        'manage_stock' => false,
        'in_stock' => $faker->boolean(),
        'slug' => $faker->slug,
        'special_price_type' => 'offer',
        'special_price_start' => $faker->dateTime(),
        'special_price_end' => $faker->dateTime(),
        'sku'=>$faker->word(),
        'viewed' => $faker->numberBetween(1,1000),
        'qty'=>$faker->numberBetween(50,300),
        'is_active' => $faker->boolean(),

    ];
});
