<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'content' => 'Comment content 1',
            'user_id' => 2,
            'post_id' => 1
        ]);

        Comment::create([
            'content' => 'Comment content 2',
            'user_id' => 1,
            'post_id' => 2
        ]);
    }
}
