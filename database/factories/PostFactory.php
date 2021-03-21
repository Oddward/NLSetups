<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'description' => $this -> faker -> optional( $weight = 0.8) -> paragraph(4),
            'image_path' => $this -> faker - file(asset('img'), ),
            'user_id' => $this -> faker -> randomNumber(2, false),
            'likes' => $this -> faker -> randomNumber(3, false),
        ];
    }
}
