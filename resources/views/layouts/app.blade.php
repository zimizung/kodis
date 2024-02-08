<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        #myImage {
          width: 150px;
          height: 80px;
          
          position: left top;
          /*float: left;
          background-color: blue;
          border: 2px solid black;*/
        }
        /* body{
        background-color: navy;
        } */

        .navbar-custom{background-color: navy;}
        .navbar-custom .navbar-nav .nav-link {color: azure}
      </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar navbar-custom shadow-sm">
            <div class="container">
               
                  <img id="myImage" src="{{ URL('images/logo.png')}}" alt="">
                {{-- Commented by Me------<a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link navbar-custom .navbar-nav .nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif--}}

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif 
                        @else
                            <li {{--class="nav-item dropdown"--}}>
                                <a {{--id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre--}}>
                                    {{ Auth::user()->name }}
                                </a>
                                <ul>
                                    
                                    <div class="dropdown open open p-3">
                                        <button class="btn border-none dropdown-toggle btn btn-light" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        <i class="fa fa-user"></i><span class="ms-2">Zimisele</span>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="triggerId">
                                            {{--<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
                                                <a class="nav-link navbar-custom {{--dropdown-item--}}" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
