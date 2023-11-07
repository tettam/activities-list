<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     *
     */

    public function definition()
    {
        $category = Category::all()->random();
        $user = $category->user;
        

        return [
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(60),
            'startDate' => $this->faker->dateTime(),
            'completedDate' => $this->faker->dateTime(),
            'user_id' => $user,
            'category_id' => $category
        ];
    }
}