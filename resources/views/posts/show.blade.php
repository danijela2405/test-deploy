@extends('layouts.app')

@section('content')
<div class="centered-box">
        <div class="actions">
            <a href="{{ url()->previous() }}" class="btn btn-back">Back</a>
        </div>

    <!-- Post Card -->
    <div class="comment-card mb-8">
        <h1>{{ $post->title }}</h1>
        <p class="text-muted">{{ $post->content }}</p>

        <p class="text-author">
            <strong>Author:</strong><br>
            {{ $user->name }}<br>
            {{ $user->email }}
        </p>

        @if(Auth::id() === $post->user_id)
            <div class="actions">
                <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-edit">Edit Post</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-form">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-delete">Delete Post</button>
                </form>
            </div>
        @endif
    </div>

    <!-- Comments Section -->
    @if (!empty($comments))
        <h2 class="mb-4">Comments</h2>
        @foreach ($comments as $comment)
        <div class="comment-card">
            <p class="text-muted">{{ $comment->content }}</p>
            <p class="text-author">Author: {{ $comment->user->name }}</p>

            @if(Auth::id() === $comment->user_id)
                <div class="actions">
                    <a href="{{ route('comments.edit', ['comment' => $comment->id]) }}" class="btn btn-edit">Edit Comment</a>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" class="inline-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-delete">Delete Comment</button>
                    </form>
                </div>
            @endif
        </div>
        @endforeach
    @endif

    <!-- Comment Form -->
    <hr class="my-8">
    <h3>Leave a Comment</h3>
    <form method="POST" action="{{ route('comments.store') }}">
        @csrf
        <label for="content">Comment</label><br>
        <textarea name="content" id="content" rows="3">{{ old('content') }}</textarea>
        @error('content')
            <p class="text-danger">{{ $message }}</p>
        @enderror

        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">

        <button type="submit" class="btn btn-show mt-4">Submit</button>
    </form>
</div>
@endsection

@push('styles')
<style>
    .centered-box {
        max-width: 800px;
        margin: 40px auto;
        background: white;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .comment-card {
        background: #f7fafc;
        border-radius: 0.75rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #cbd5e0;
        border-radius: 0.5rem;
        resize: vertical;
    }

    .text-muted {
        color: #4a5568;
    }

    .text-author {
        font-size: 0.875rem;
        color: #718096;
        margin-top: 0.5rem;
    }

    .btn {
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        color: white;
        font-size: 0.875rem;
        text-decoration: none;
        cursor: pointer;
        border: none;
        transition: background 0.3s ease;
    }

    .btn-show { background-color: #4299e1; }
    .btn-show:hover { background-color: #3182ce; }

    .btn-edit { background-color: #38a169; }
    .btn-edit:hover { background-color: #2f855a; }

    .btn-delete { background-color: #e53e3e; }
    .btn-delete:hover { background-color: #c53030; }

    .actions {
        display: flex;
        gap: 0.5rem;
        margin-top: 1rem;
        flex-wrap: wrap;
    }

    .inline-form {
        display: inline;
    }

    .mt-4 { margin-top: 1rem; }
    .my-8 { margin: 2rem 0; }
    .mb-4 { margin-bottom: 1rem; }
    .mb-8 { margin-bottom: 2rem; }
</style>
@endpush
