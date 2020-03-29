<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Agenda;
use Faker\Generator as Faker;

$factory->define(App\Agenda::class, function (Faker $faker) {
    return [
        //
        'user_id' => $faker->numberBetween($min=1,$max=20),
        'group_id' => $faker->numberBetween($min=1,$max=21),
        'title' => $faker->sentence,
        'body' => $faker->text,
        'created_at' => $faker->datetime($max='now',$timezone = date_default_timezone_get()),
        'updated_at' => $faker->datetime($max='now',$timezone = date_default_timezone_get()),

                //
        // foreach(range(1,20) as $num) {
        //     DB::table('agendas') -> insert([
        //         'user_id' => 1,
        //         'group_id' => 1,
        //         'title' => "議題 {$num}",
        //         'body' => "議題本文議題本文議題本文議題本文議題本文",
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }
    ];
});
