@extends('layouts.app')

@section('content')
<div class="centered-box">
    <h1 class="mb-6">Edit User</h1>

    <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="form-group mb-4">
            <label for="name">Name</label>
            <input type="text" class="form-input" name="name" id="name" value="{{ $user->name }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group mb-4">
            <label for="email">Email</label>
            <input type="email" class="form-input" name="email" id="email" value="{{ $user->email }}">
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- New Password -->
        <div class="form-group mb-4">
            <label for="new_password">New Password</label>
            <input type="password" class="form-input" name="new_password" id="new_password">
            @error('new_password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Is Admin -->
        <div class="form-group mb-4">
            <label>
                <input type="checkbox" name="is_admin" id="is_admin" {{ $user->is_admin ? 'checked' : '' }}>
                Is Admin
            </label>
            @error('is_admin')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-show">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-cancel ml-4">Back</a>
    </form>
</div>
@endsection
