<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'dni' => $this->faker->bothify('???########'),
            'ruc' => $this->faker->numerify('###########'),
            'address' => $this->faker->streetAddress,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->email,
        ];
    }
}
