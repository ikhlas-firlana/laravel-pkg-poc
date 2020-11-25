<?php

$factory->define(\Ifirlana\Poc\Models\Poc::class, function (Faker\Generator $faker) {
  return [
    'title'     => $faker->words(3),
    'body'      => $faker->paragraph,
  ];
});

// use Ifirlana\Poc\Models\Poc;
// use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Str;

// class PocFactory extends Factory
// {
//     /**
//      * The name of the factory's corresponding model.
//      *
//      * @var string
//      */
//     protected $model = Poc::class;

//     /**
//      * Define the model's default state.
//      *
//      * @return array
//      */
//     public function definition()
//     {
//         return [
//           'title'     => $faker->words(3),
//           'body'      => $faker->paragraph,
//           'author_id' => 999,
//         ];
//     }
// }