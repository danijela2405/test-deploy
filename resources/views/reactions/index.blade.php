@extends('layouts.app')

@section('content')
<div class="centered-box">
    <h1 class="mb-6">All reactions</h1>

    @foreach ($reactions as $reaction)
    <div class="user-card mb-4">
        <p><strong>Reaction:</strong> {{ $reaction->reaction }}</p>
        <p><strong>Vote:</strong> {{ $reaction->vote ? 'Upvote' : 'downvote' }}</p>
    </div>
    @endforeach
</div>
@endsection


@push('styles')
<style>
    .show-btn {
        background-color: #4299e1;
    }

    .show-btn:hover {
        background-color: #3182ce;
    }
    .user-card {
        background: #f7fafc;
        border-radius: 0.75rem;
        padding: 1.5rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }

    .btn-delete {
        background-color: #e53e3e;
        color: white;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 0.5rem;
        cursor: pointer;
    }

    .btn-delete:hover {
        background-color: #c53030;
    }

    .mb-4 { margin-bottom: 1rem; }
    .mb-6 { margin-bottom: 1.5rem; }
</style>
@endpush
