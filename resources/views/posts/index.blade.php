@extends('layouts.app')

@section('content')

<a href="{{ route('posts.create') }}" class="btn show-btn" title="Add Post">Add a post</a>

<h1>Post list</h1>
<div class="post-list-box">
    @foreach ($posts as $post)
    <div class="post-card">
        <h2>{{ $post->title }}</h2>
        <p class="content">{{ $post->content }}</p>
        <p class="author">Posted by {{ $post->user->name }}</p>

        <div class="actions">
            <a href="{{ route('posts.show', $post->id) }}" class="btn show-btn" title="View Post">Show</a>

            @if ($post->user_id === Auth::id())
                <a href="{{ route('posts.edit', $post->id) }}" class="btn edit-btn" title="Edit Post">Edit</a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn delete-btn" title="Delete">Delete</button>
                </form>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection

@push('styles')
<style>
    .post-list-box {
        max-width: 800px;
        margin: 40px auto;
        display: grid;
        gap: 1.5rem;
    }

    .post-card {
        background: #fff;
        border-radius: 1rem;
        padding: 1.5rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .post-card h2 {
        font-size: 1.25rem;
        font-weight: bold;
        color: #2d3748;
        margin-bottom: 0.5rem;
    }

    .post-card .content {
        color: #4a5568;
        margin-bottom: 0.75rem;
    }

    .post-card .author {
        font-size: 0.9rem;
        color: #718096;
        margin-bottom: 1rem;
    }

    .actions {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .btn {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 0.5rem;
        color: white;
        text-decoration: none;
        font-size: 0.875rem;
        transition: background-color 0.3s ease;
    }

    .show-btn {
        background-color: #4299e1;
    }

    .show-btn:hover {
        background-color: #3182ce;
    }

    .edit-btn {
        background-color: #38a169;
    }

    .edit-btn:hover {
        background-color: #2f855a;
    }

    .delete-btn {
        background-color: #e53e3e;
    }

    .delete-btn:hover {
        background-color: #c53030;
    }

    .inline-form {
        display: inline;
    }
</style>
@endpush
