<?php

namespace Database\Factories\Backend;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Backend\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->text(7);
        return [
            'title' => $this->faker->text(50),
            'content' => $this->faker->text(50),
            'slug' =>   Str::slug($name),
            'users_id' => rand(1,1),
            'categories_id' => rand(1,2),
            'status' => 'publish',

        ];
    }
}
