<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'code'=> $this->faker->ean13,
            'name' => $this->faker->word.' '.$this->faker->numerify('####'),
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'stock' => $this->faker->randomDigit,
            'image' => $this->faker->unique()->numberBetween($min = 1, $max = 18).'.jpg',
            'sell_price' => $this->faker->numberBetween($min = 1000000, $max = 9000000),
            'status' => $this->faker->randomElement($array = array ('ACTIVE','DEACTIVATED')),
            'category_id' => $this->faker->numberBetween($min = 1, $max = 10),
            'provider_id' => $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
