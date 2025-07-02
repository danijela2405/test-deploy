<?php

namespace Database\Seeders;

use App\Models\Reaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reaction::create([
            'vote' => true,
            'reaction' => null,
            'user_id' => 1,
            'post_id' => 1,
            'comment_id' => null,
        ]);
      
        Reaction::create([
            'vote' => false,
            'reaction' => 'haha',
            'user_id' => 2,
            'post_id' => null,
            'comment_id' => 1,
        ]);
        
        Reaction::create([
            'vote' => true,
            'reaction' => null,
            'user_id' => 2,
            'post_id' => 1,
            'comment_id' => null,
        ]);
    }
}
