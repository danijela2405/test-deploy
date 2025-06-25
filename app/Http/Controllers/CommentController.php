<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentCreateRequest;
use App\Http\Requests\CommentEditRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentCreateRequest $request)
    {
       $data = $request->validated();

       $data['user_id'] = Auth::user()->id;

       $comment  = Comment::create($data);

       $post = Post::find($comment->post_id);

       return redirect()->route('posts.show', 
       ['post' => $post, 'user' => $post->user, 'comments' => $post->comments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('comments.edit', ['comment' => $comment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommentEditRequest $request, Comment $comment)
    {

        $comment->content = $request->input('content');
        $comment->save();

        $post = Post::find($comment->post_id);

        return redirect()->route('posts.show', 
        ['post' => $post, 'user' => $post->user, 'comments' => $post->comments]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        if(Auth::user()->id !== $comment->user_id){
            abort(403, 'Nemate dopustenje za brisanje ovog komentara');
        }

        $post = Post::find($comment->post_id);
        $comment->delete();

        return redirect()->route('posts.show', 
        ['post' => $post, 'user' => $post->user, 'comments' => $post->comments]);
    }
}
