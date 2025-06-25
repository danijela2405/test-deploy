<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @stack('styles')
    <title>
      @yield('title')
    </title>
</head>
<body>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger btn-sm" title="Logout">Logout</button>
    </form>

    @yield('content')
    @stack('scripts')
</body>
</html>

