<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @stack('styles')

    <style>
        .centered-box {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #cbd5e0;
            border-radius: 0.5rem;
            font-size: 1rem;
            margin-top: 0.25rem;
            resize: vertical;
        }

        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            color: white;
            font-size: 0.875rem;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-show {
            background-color: #4299e1;
        }

        .btn-show:hover {
            background-color: #3182ce;
        }

        .text-danger {
            color: #e53e3e;
            font-size: 0.875rem;
            margin-top: 0.25rem;
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

        .mb-4 {
            margin-bottom: 1rem;
        }
        .btn-back {
        background-color: #a0aec0;
        margin-left: 0.5rem;
        }

        .btn-back:hover {
            background-color: #718096;
        }

        .actions {
            display: flex;
            gap: 1rem;
            align-items: center;
            margin-top: 1rem;
        }
    </style>
    <title>
      @yield('title')
    </title>
</head>
<body>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger btn-sm" title="Logout">Logout</button>
    </form>

    @include('partials.menu')

    @yield('content')
    @stack('scripts')
</body>
</html>

