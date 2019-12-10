<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$title = $faker->word;
	$slug = str_slug($title);
    return [
        'name' => $title,
        'slug' => $slug,
        'details' => $faker->paragraph,
        'price' => $faker->numberBetween(100, 1000),
        'discount' => $faker->numberBetween(2, 100),
        'stock' => $faker->randomDigit,
    ];
});
