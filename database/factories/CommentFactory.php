<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //コメントダミーデータの雛形
        'user_id' => $faker->numberBetween($min=1,$max=20),
        'agenda_id' => $faker->numberBetween($min=1,$max=100),
        'body' => $faker->text,
        'created_at' => $faker->datetime($max='now',$timezone = date_default_timezone_get()),
        'updated_at' => $faker->datetime($max='now',$timezone = date_default_timezone_get()),

    ];
});
