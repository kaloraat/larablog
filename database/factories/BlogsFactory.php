<?php

use Faker\Generator as Faker;

$factory->define(App\Blog::class, function (Faker $faker) {
	return [
		'title' => $faker->sentence(10),
		'body' => $faker->sentence(100),
	];
});
