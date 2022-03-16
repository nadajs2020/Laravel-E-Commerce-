<?php

namespace Database\Factories;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chat>
 */
class ChatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    //shuffle()


    protected $model = Chat::class;


    public function definition()
    {
        $user_id = User::pluck('id')->toArray(); //[1,2,3,4,5,6,7,8] //[5,3,2,9]
        $index_1 = Arr::random($user_id);
        $index_2 = Arr::random($user_id);
        return [
            'is_seen' => $this->faker->boolean(),
            'is_forward' => $this->faker->boolean(),
            'message' => $this->faker->sentence(20),
            'first_user_id' => $user_id[$index_1],
            'second_user_id' => $user_id[$index_2],
        ];
    }
}
