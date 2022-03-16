<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $imageIds=Image::pluck('id')->toArray();
        $index=array_rand($imageIds);


        return [
            'name'=>$this->faker->unique()->text(100),
            'description'=>$this->faker->sentence(25),
            'image_id'=>$imageIds[$index],
        ];
    }
}
