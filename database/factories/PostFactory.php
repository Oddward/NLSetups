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
            'description' => $this -> faker -> optional( $weight = 0.7) -> paragraph(),
            'image_path' => $this -> faker -> file(public_path('img\screens'), public_path('img'), false),
            'user_id' => $this -> faker -> randomNumber(1, false) + 1,
            'likes' => $this -> faker -> randomNumber(3, false),
        ];
    }
}
