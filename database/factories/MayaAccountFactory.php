<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MayaAccount>
 */
class MayaAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mobile_number' => $this->faker->unique()->randomNumber($nbDigits = NULL, $strict = false),
            'account_nick' => $this->$faker->unique()->name,
            'last_4_digits' => $this->$faker->randomNumber($nbDigits = 4, $strict = false),
            'balance' => $this->$faker->
        ];
    }
}
