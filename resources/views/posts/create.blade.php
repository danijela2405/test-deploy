@extends('layouts.app')

@section('content')
<div class="centered-box">

    <h1 class="mb-4">Create a New Post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <!-- Title -->
        <div class="form-group mb-4">
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-input">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Content -->
        <div class="form-group mb-4">
            <label for="content">Content</label><br>
            <textarea name="content" id="content" rows="4" class="form-input">{{ old('content') }}</textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-show">Submit</button>
    </form>

    <br>
    <br>
    <a href="{{ route('posts.index') }}" class="btn btn-show" title="Back">Back to posts</a>

</div>


@endsection
