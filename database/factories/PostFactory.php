<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
   

   public function definition():array
   {
    return
    [
        'title' => fake()->name(),
        'content' =>fake()->paragraph(),
        'user_id' =>1,
    ];
   }
}
