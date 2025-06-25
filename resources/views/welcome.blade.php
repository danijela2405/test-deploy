@extends('layouts.home')

@section('content')
<div class="welcome-box">
    <h1>Welcome {{ Auth::user()->name }}!</h1>
    <h3>What would you like to look at today?</h3>
    <nav>
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('users.index') }}">Users</a>
    </nav>
</div>
@endsection


@push('styles')
<style>
    .welcome-box {
        max-width: 600px;
        margin: 40px auto;
        background: white;
        padding: 2rem;
        border-radius: 1rem;
        text-align: center;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .welcome-box h1 {
        font-size: 2rem;
        font-weight: bold;
        color: #2d3748;
    }

    .welcome-box h3 {
        font-size: 1.1rem;
        color: #4a5568;
        margin-bottom: 2rem;
    }

    .welcome-box a {
        display: inline-block;
        margin: 0.5rem;
        padding: 0.75rem 1.5rem;
        background-color: #3182ce;
        color: white;
        border-radius: 0.5rem;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .welcome-box a:hover {
        background-color: #2b6cb0;
    }
</style>
@endpush
