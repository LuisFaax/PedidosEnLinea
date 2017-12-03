<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(3), 0,-1),
        'description' =>$faker->sentence(10),
        'long_description' =>$faker->text,
        'price' =>$faker->randomFloat(2, 5, 150),// 2(decimals), 5(min price), 150(max price)

        'category_id' => $faker->numberBetween(1,5)
    ];
});
