<?php

$factory->define(\Ifirlana\Poc\Models\Poc::class, function (Faker\Generator $faker) {
  return [
    'title'     => $faker->words(3),
    'body'      => $faker->paragraph,
  ];
});
