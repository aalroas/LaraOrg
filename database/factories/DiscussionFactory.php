<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use DevDojo\Chatter\Models\Category;
use DevDojo\Chatter\Models\Discussion;
use DevDojo\Chatter\Models\Post;
use App\Models\Auth\User;

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

$factory->define(Discussion::class, function (Faker $faker) {
    $title = $faker->unique()->text(80);

    return [
        'title' => $title,
        'color' => $faker->hexcolor,
        'chatter_category_id' => Category::all()->random(),
        'user_id' => $faker->numberBetween(1, 2),
        'views' => $faker->numberBetween(0, 1000),
        'created_at' => $faker->dateTimeBetween('-20 days', 'now'),
        'updated_at' => null,
        'slug' => Str::slug($title),
        'sticky' => $faker->numberBetween(0, 1),
        'answered' => $faker->numberBetween(0, 1),
    ];
});

$factory->afterCreating(Discussion::class, function ($discussion, $faker) {
    $discussion->users()->save($discussion->user);
});

$factory->afterCreating(Discussion::class, function ($discussion, $faker) {
    for ($i = 0; $i < $faker->numberBetween(0, 100); $i++) {
        $post = factory(Post::class)->make();
        $discussion->posts()->save($post);

        try {
            $discussion->users()->save($post->user);
        } catch (\Exception $e) {}
    }
});
