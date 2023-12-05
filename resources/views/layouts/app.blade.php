<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

{{--             <nav>
                <ul>
                    @if(auth()->check())
                        @if(auth()->user()->role === 'admin')
                            <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                        @else
                            <li><a href="{{ route('user.dashboard') }}">User Dashboard</a></li>
                        @endif
                    @endif
                </ul>
            </nav><nav>
                <ul>
                    @if(auth()->check())
                        @if(auth()->user()->role === 'admin')
                            <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                        @else
                            <li><a href="{{ route('user.dashboard') }}">User Dashboard</a></li>
                        @endif
                    @endif
                </ul>
            </nav> --}}
{{--             @auth
            @if(auth()->user()->role === 'admin')
                <!-- Admin-specific content -->
                <p>Welcome, Admin!</p>
            @elseif(auth()->user()->role === 'user')
                <!-- User-specific content -->
                <p>Welcome, User!</p>
            @endif
        @endauth --}}
            <!-- resources/views/layouts/app.blade.php -->

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application</title>
</head>
<body>

    <nav>
        <ul>
            @auth
                @if(auth()->user()->role === 'admin')
                    <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                @elseif(auth()->user()->role === 'user')
                    <li><a href="{{ route('user.dashboard') }}">User Dashboard</a></li>
                @endif
            @endauth

            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html> --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
