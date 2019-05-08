<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Models\Post::class, function (Faker $faker) {
	$count = User::count();
    return [
      "title" => $faker->name,
      "content" => $faker->text($maxNbChars = 50),
      "user_id" => $faker->numberBetween(1, $count)

    ];
});
