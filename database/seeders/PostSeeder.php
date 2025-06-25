<?php

namespace Database\Seeders;

use App\Models\Post;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Post title 1',
            'content' => 'Post content 1',
            'user_id' => 1,
            'created_at' => new DateTime('-400 days')
        ]);
        
        Post::create([
            'title' => 'Post title 2',
            'content' => 'Post content 2',
            'user_id' => 2,
            'created_at' => new DateTime('-2 days')
        ]);
        
        Post::create([
            'title' => 'Post title 3',
            'content' => 'Post content 3',
            'user_id' => 3,
            'created_at' => new DateTime('-3 days')
        ]);
        
        Post::create([
            'title' => 'Post title 4',
            'content' => 'Post content 4',
            'user_id' => 2
        ]);
        
        Post::create([
            'title' => 'Post title 5',
            'content' => 'Post content 5',
            'user_id' => 1
        ]);
        
        Post::create([
            'title' => 'Post title 6',
            'content' => 'Post content 6',
            'user_id' => 1
        ]);
    }
}
