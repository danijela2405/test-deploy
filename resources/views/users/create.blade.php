@extends('layouts.app')

@section('content')
<div class="centered-box">
    <h1 class="mb-6">Create User</h1>

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <!-- Name -->
        <div class="form-group mb-4">
            <label for="name">Name</label>
            <input type="text" class="form-input" name="name" id="name" value="{{ old('name') }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-group mb-4">
            <label for="email">Email</label>
            <input type="email" class="form-input" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group mb-4">
            <label for="password">Password</label>
            <input type="password" class="form-input" name="password" id="password">
            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Is Admin -->
        <div class="form-group mb-4">
            <label>
                <input type="checkbox" name="is_admin" id="is_admin" {{ old('is_admin') ? 'checked' : '' }}>
                Is Admin
            </label>
            @error('is_admin')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit -->
        <button type="submit" class="btn btn-show">Submit</button>
    </form>
</div>
@endsection
