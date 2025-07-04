<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    
    protected $fillable = [
        'vote',
        'reaction',
        'user_id',
        'post_id',
        'comment_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function post(){
        return $this->belongsTo(Post::class);
    }
    
    public function comment(){
        return $this->belongsTo(Comment::class);
    }
}
