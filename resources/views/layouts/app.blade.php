<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bantuan Sosial</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
        @auth
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
            </li>
        @endauth
            <!-- <li>
                <a href="" class="p-3">Dinas</a>
            </li>
            <li>
                <a href="" class="p-3">Kecamatan</a>
            </li>
            <li>
                <a href="" class="p-3">Admin</a>
            </li> -->
            <li>
            <a href="/" class="p-3">Web Bantuan Sosial</a>
            </li>
        </ul>
        
        
        <!-- <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{ route('register')}}" class="p-3">Register</a>
                </li>
            @endguest

            
        </ul> -->
    </nav>
    @yield('content')
</body>
</html>