<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Molels\Post;

class PostSeeder extends Seeder
{
   
    public function run(): void
    {
        Post::factory(100)->create();
    }
}
