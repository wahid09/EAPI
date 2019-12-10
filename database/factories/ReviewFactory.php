<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use App\Model\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
	$reviewId = Product::pluck('id')->toArray();
    return [
    	'product_id' => $faker->randomElement($reviewId),
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(1, 5),
    ];
});
