<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/plugins/bower_components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="">
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

        <main class="py-4">

            @yield('content')
        </main>
      </div>
      <script src="{{ asset('css/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="{{ asset('css/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <!-- Menu Plugin JavaScript -->
      <script src="{{ asset('css/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
      <!--slimscroll JavaScript -->
      <script src="{{ asset('css/js/jquery.slimscroll.js') }}"></script>
      <!--Wave Effects -->
      <script src="{{ asset('css/js/waves.js') }}"></script>
      <!--Counter js -->
      <script src="{{ asset('css/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
      <script src="{{ asset('css/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
      <script src="{{ asset('css//plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script>
      <script src="{{ asset('css/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
      <!-- Sparkline chart JavaScript -->
      <script src="{{ asset('css/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
      <!-- Custom Theme JavaScript -->
      <script src="{{ asset('css/js/custom.min.js') }}"></script>
      <script src="{{ asset('css/js/dashboard1.js') }}"></script>
      <script src="{{ asset('css/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
</body>
</html>
