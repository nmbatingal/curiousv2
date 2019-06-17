<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <h1><a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a></h1>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-5 pt-1">
                            <a class="nav-link" href="#">Articles & Researches</a>
                        </li>
                        @guest
                            @if (!Route::is('login') && !Route::is('register'))
                                <li class="nav-item pt-1">
                                    <a class="btn btn-outline-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item ml-2 pt-1">
                                    <a class="btn btn-outline-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if(auth()->user()->provider_name)
                                        <img src="{{ auth()->user()->avatar }}" alt="avatar" width="32" height="32" style="margin-right: 8px;">
                                    @else
                                        <img src="{{ asset(auth()->user()->avatar) }}" alt="avatar" width="32" height="32" style="margin-right: 8px;">
                                    @endif
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">Admin settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- /.container -->
        @yield('content')

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container-fluid">
              <p class="m-0 text-center text-white">Copyright &copy; {{ config('app.name', 'Laravel') }}. {{ date("Y") }}</p>
            </div>
            <!-- /.container -->
        </footer>
    </div>
</body>
</html>
