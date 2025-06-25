@extends('layouts.app')

@section('content')
@if (Auth::user()->is_admin)
     <a href="{{ route('users.create') }}" class="btn btn-show" title="Create User">Add a new user</a>
@endif
<div class="centered-box">
    <h1 class="mb-6">All Users</h1>

    @foreach ($users as $user)
    <div class="user-card mb-4">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Admin:</strong> {{ $user->is_admin ? 'Yes' : 'No' }}</p>

        <a href="{{ route('users.show', $user->id) }}" class="btn show-btn" title="View user">Show</a><br><br>

        @if(Auth::user()->is_admin)
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="inline-form">
            @csrf
            @method('DELETE')
            <button class="btn btn-delete" title="Delete">Delete</button>
        </form>
        @endif
        <br>
        @if ($user->id === Auth::user()->id)
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-show" title="Edit User">Edit</a>
        @endif
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
