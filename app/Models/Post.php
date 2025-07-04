<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //posts
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'created_at'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments (){
        return $this->hasMany(Comment::class);
    }
}
