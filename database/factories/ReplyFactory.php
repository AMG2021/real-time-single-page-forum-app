<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Question;
use App\Model\Reply;
use App\User;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => function() {
            return Question::all()->random();
        },
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});


//$table->text('body');
//$table->bigInteger('question_id')->unsigned();
//$table->bigInteger('user_id');
//$table->foreign('question_id')->references('id')->on('questions');
