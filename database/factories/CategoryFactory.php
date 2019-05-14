<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => $faker->slug
    ];
});

//$table->bigIncrements('id');
//$table->string('name');
//$table->string('slug');
