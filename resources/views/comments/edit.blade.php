@extends('layouts.app')

@section('content')
<div class="centered-box">

    <h1 class="mb-4">Edit Comment</h1>

    <form method="POST" action="{{ route('comments.update', ['comment' => $comment->id]) }}">
        @csrf
        @method('PUT')

        <!-- Content -->
        <div class="form-group mb-4">
            <label for="content">Content</label><br>
            <textarea name="content" id="content" rows="4" class="form-input">{{ old('content', $comment->content) }}</textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="actions">
            <button type="submit" class="btn btn-show">Submit</button>
            <a href="{{ url()->previous() }}" class="btn btn-back">Back</a>
        </div>
    </form>
</div>
@endsection
