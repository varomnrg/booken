<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'category_id' => Category::factory(),
            'description' => fake()->paragraph(),
            'quantity' => fake()->numberBetween(1, 100),
            'pdf_file' => fake()->word(
                [
                    'pdf',
                    'epub',
                    'mobi',
                    'doc',
                    'docx',
                    'txt',
                ]
            ),
            'cover_image' => fake()->word(
                [
                    'jpg',
                    'png',
                    'jpeg',
                    'gif',
                ]
            ),
            'user_id' => User::factory(),
        ];
    }
}
