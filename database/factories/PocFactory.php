<?php

use Ifirlana\Poc\Models\Poc;
use Faker\Generator as Faker;

$factory->define(Poc::class, function (Faker $faker) {
  return [
    'title'     => $faker->words(3),
    'body'      => $faker->paragraph,
    'author_id' => 999,
  ];
});