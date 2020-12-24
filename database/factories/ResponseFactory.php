<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Response::class, function (Faker $faker) {
  $original_date = $faker->dateTimeBetween('-5day', 'now');
  return [
      'response' => 1,
      'answer_id' => $faker->numberBetween(1, 4),
      'created_at' => $original_date->modify('-1hour'),
      'updated_at' => $original_date->modify('+1hour'),
  ];
});
