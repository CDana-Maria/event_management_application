<?php

namespace Database\Factories;

use App\Models\ArticleTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_id' => $this->faker->numberBetween(1, 10),
            'tag_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}

