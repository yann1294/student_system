<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\classroom;
use Faker\Generator as Faker;

$factory->define(classroom::class, function (Faker $faker) {

    return [
        'classroom_name' => $faker->word,
        'classroom_code' => $faker->word,
        'classroom_description' => $faker->text,
        'classroom_status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
