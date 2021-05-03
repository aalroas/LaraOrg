<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use DevDojo\Chatter\Models\Category;

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

$factory->define(Category::class, function (Faker $faker) {
    $category = $faker->unique()->word;

    return [
        'name_ar' => Str::title($category),
        'name_tr' => Str::title($category),
        'name_en' => Str::title($category),
        'slug' => Str::slug($category),
        'color' => $faker->hexcolor,
        'order' => $faker->randomDigitNotNull,
        'parent_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->dateTimeBetween('-1 years', '-20 days'),
        'updated_at' => null
    ];
});
