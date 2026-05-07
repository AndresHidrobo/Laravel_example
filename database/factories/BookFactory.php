<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use App\Models\Editorial;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),

            'description' => fake()->text(45),

            'author_id' => Author::inRandomOrder()->first()->id,

            'editorial_id' => Editorial::inRandomOrder()->first()->id,
        ];
    }
}
