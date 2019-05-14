<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Category;
use App\Model\Question;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'body' => $faker->text,
        'category_id' => function() {
            return Category::all()->random();
        },
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});


//$table->bigIncrements('id');
//$table->string('title');
//$table->string('slug');
//$table->text('body');
//$table->bigInteger('category_id')->unsigned();
//$table->bigInteger('user_id')->unsigned();

