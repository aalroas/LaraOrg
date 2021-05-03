<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use DevDojo\Chatter\Models\Post;
use DevDojo\Chatter\Models\Discussion;
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

$factory->define(Post::class, function (Faker $faker) {
    return [
        'body' => $faker->text(300),
        'user_id' => $faker->numberBetween(1, 2),
        'chatter_discussion_id' => Discussion::all()->random(),
        'created_at' => now(),
        'updated_at' => now(),
        'markdown' => $faker->numberBetween(0, 2),
        'locked' => $faker->numberBetween(0, 2),

    ];
});

// Link user to active users on the discussion
$factory->afterCreating(Post::class, function ($post, $faker) {
    $post->discussion->users()->save($post->discussion->user);
});
