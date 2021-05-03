<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message' => $this->faker->title(),
            'user_id' => $this->faker->numberBetween(1,5),
            'article_id' => $this->faker->numberBetween(7,10),
            'approved_at'=>$this->faker->date(),
            'updated_at'=>$this->faker->date(),
            'created_at'=>$this->faker->date()  
        ];
    }
}
