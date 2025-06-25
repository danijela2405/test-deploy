@extends('layouts.guest')

@section('content')
<div class="centered-box">
    <h1 class="mb-4">Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-input" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-input" required>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <br><button type="submit" class="btn btn-show mt-4">Login</button>
    </form>
    <br><br>

    Don't have an account?  <a href="{{ route('register_user') }}" class="btn btn-show mt-2">Register</a>
</div>
@endsection
