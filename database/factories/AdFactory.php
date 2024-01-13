<?php

namespace Database\Factories;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Ad::class;

    public function definition(): array
    {
        return [
            "external_id"=> $this->faker->word,
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'video_url' => $this->faker->url,
            'category_id' => Category::factory(),  // This will create a Category too
            'views_count' => $this->faker->numberBetween(0, 1000),
            'likes_count' => $this->faker->numberBetween(0, 500),
            'comments_count' => $this->faker->numberBetween(0, 300),
            'shared_count' => $this->faker->numberBetween(0, 200),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'fetched_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            
        ];
    }
}
