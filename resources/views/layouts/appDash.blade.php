<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Almarai|Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        * {
            font-family: Almarai, sans-serif;
        }
        .navbar {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            height: 70px;
            width: 110px;
        }
        .search-bar {
            width: 50%;
            position: relative;
        }
        .search-bar input {
            width: 100%;
            padding-right: 2.5rem;
        }
        .search-bar .input-group-text {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            background: none;
            border: none;
            color: #333;
            padding: 0.5rem;
        }
        .sidebar {
            background-color: #343a40;
            color: #fff;
            min-height: 100vh;
        }
        .sidebar .nav-link {
            color: #fff;
            font-size: 1rem;
            padding: 0.75rem 1rem;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
        }
        .main-content {
            padding: 2rem;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        footer {
            background-color: #f1f1f1;
            padding: 1rem;
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div id="app">
    <!--Nav Bar -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/Logo.png') }}" alt="Logo">
                    </a>
                    <a class="nav-link mx-2" href="{{route('index2')}}"><i class="bi bi-boxes"></i> Home</a>

                    <form class="d-flex mx-auto search-bar">
                        <input type="search" class="form-control rounded" placeholder="Find dishes, restaurants, or cuisines" aria-label="Search">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </form>

                    <div class="d-flex ms-auto">
                        <a class="nav-link mx-2"><i class="bi bi-tag"></i> Foodi Plus</a>
                        <a class="nav-link mx-2"><i class="bi bi-heart"></i> Your Wishlist</a>
                        <a href="{{route('cart')}}" class="nav-link mx-2">
                            <i class="bi bi-cart4"></i> Cart
                            <span id="cart-count" class="badge bg-primary">{{Session::get('counter')}}</span>
                        </a>
                    </div>

                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('index') }}">
                                        Dashboard
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Dashboard Sidebar and contents -->
        <main>
            <div class="row">
                <aside class="col-md-3 col-xl-2 sidebar">
                    <div class="d-flex flex-column p-3">
                        <a href="/" class="text-white text-decoration-none">
                            <i class="fs-4 bi-speedometer2"></i> <span class="fs-5 d-none d-sm-inline">Dashboard</span>
                        </a>
                        <ul class="nav flex-column" id="menu">
                            <li class="nav-item">
                                <a href="{{ route('index') }}" class="nav-link">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dash Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products') }}" class="nav-link">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Products</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('showDet') }}" class="nav-link">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Product's Details</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('orders')}}" class="nav-link">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Orders</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
                
                <div class="col-md-9 main-content">
                    @yield('content')
                </div>
            </div>
        </main>

        <footer>
            © 2024 Foodi. All rights reserved.
        </footer>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
