<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Provider::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->company,
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'email' => $this->faker->companyEmail,
            'ruc_number' => $this->faker->numerify('##########'),
            'address' => $this->faker->streetAddress,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'phone' => $this->faker->e164PhoneNumber,
        ];
    }
}
