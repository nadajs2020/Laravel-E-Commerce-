<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userId = User::pluck('id')->toArray();
        $index = Arr::random($userId);
        return [
            'user_id' => $index,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'discount' => $this->faker->randomFloat(2, 0, 100),
            'tax' => $this->faker->randomFloat(2, 0, 1000),
            'is_received' => $this->faker->boolean,
            'shipped_at' => $this->faker->dateTime,
            'is_checked_out' => true
        ];
    }
}
