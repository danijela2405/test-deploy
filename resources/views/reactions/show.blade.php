@extends('layouts.app')

@section('content')
<div class="centered-box">
    <h1 class="mb-4">reaction Details</h1>

    <div class="info-card">
        <p><strong>Reaction:</strong> {{ $reaction->reaction }}</p>
        <p><strong>Vote:</strong> {{ $reaction->vote ? 'Upvote' : 'Downvote' }}</p>
    </div>

    <a href="{{ route('reactions.index') }}" class="btn btn-cancel mt-6">Back</a>
</div>
@endsection

@push('style')
<style>

    .info-card {
        padding: 1.25rem;
        background-color: #f7fafc;
        border-radius: 0.75rem;
        box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        font-size: 1rem;
        line-height: 1.6;
    }

    .btn-cancel {
        background-color: #a0aec0;
        color: white;
        padding: 0.5rem 1.25rem;
        border: none;
        border-radius: 0.5rem;
        text-decoration: none;
    }

    .btn-cancel:hover {
        background-color: #718096;
    }

    .mt-6 {
        margin-top: 1.5rem;
        display: inline-block;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }
</style>
@endpush
