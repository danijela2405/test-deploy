@extends('layouts.guest')

@section('content')
<div class="centered-box">
    <h1 class="mb-4">Register</h1>

    <form method="POST" action="{{ route('register_user') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-input" required>
        </div>
        <br>
        <button type="submit" class="btn btn-show mt-4">Register</button>
    </form>
<br><br>
    Already have an account?  <a href="{{ route('login') }}" class="btn btn-show mt-2">Login</a>
</div>
@endsection
