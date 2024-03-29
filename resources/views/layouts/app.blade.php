<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @if(session('formularioEnviado'))
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
        // Si el formulario ya ha sido enviado, oculta el botón
        $('#miBoton').hide();
        });
    </script>
    @endif 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Donadores Perú</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<<<<<<< HEAD
<<<<<<< HEAD
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md "style="background-color: #009aff;>
            <div class="container">
                <img src="http://localhost/DONADORESPERU/resources/views/banner/LogoDP.png" alt="Logo" width="100" height="40" class="d-inline-block align-text-top"></a>
                <a class="navbar-brand" style="color: #ffffff" href="{{ url('/') }}">Donadores Peru</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
                </button>
                <img src="http://localhost/DONADORESPERU/resources/views/banner/Maps.png" alt="Logo" width="30" height="20" class="d-inline-block align-text-top"></a>
                <a class="navbar-brand" style="color: #ffffff" href="{{route('banner.mapa')}}">Locales Autorizados</a>
                <a class="navbar-brand" style="color: #ffffff" href="{{route('donadore.create')}}">DONAR</a>
                <a class="navbar-brand" style="color: #ffffff" href="{{route('solicituds.create')}}">SOLICITAR SANGRE</a>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto ">
                    <!-- Right Side Of Navbar -->
=======
    </head>
=======
</head>
>>>>>>> gula
    <body>
        <div id="app"> 
            <nav class="navbar navbar-expand-md "style="background-color: #000000; box-shadow: 0 0 500px #ffffff;" style="position:fixed" style="top:0">
                    <img src="http://localhost/DONADORESPERU/resources/views/banner/LogoDP.png" alt="Logo" width="100" height="40" class="d-inline-block align-text-top"></a>
                    <a class="navbar-brand" style="color: #ffffff" href="{{ url('/') }}">Donadores Peru</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <img src="http://localhost/DONADORESPERU/resources/views/banner/Maps.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"></a>
                    <a class="navbar-brand" style="color: #ffffff" href="{{route('banner.mapa')}}">Locales Autorizados</a>
>>>>>>> gula
                    
                    @can('donador') <a class="navbar-brand" id="miBoton" style="color: #ffffff" href="{{route('donadore.create')}}">DONAR</a>@endcan
                    @can('donador') <a class="navbar-brand" style="color: #ffffff" href="{{route('solicitud.create')}}">SOLICITAR SANGRE</a>@endcan
                    @can('donadoractivo') <a class="navbar-brand" style="color: #ffffff" href="{{route('solicitud.create')}}">SOLICITAR SANGRE</a>@endcan
                    @can('admin') 
                    <a class="navbar-brand" style="color: #ffffff" href="{{route('banner.index')}}">Ver Campaña</a>
                    <a class="navbar-brand" style="color: #ffffff" href="{{route('solicitud.index')}}">Ver Solicitudes</a>
                    <a class="navbar-brand" style="color: #ffffff" href="{{route('donadore.index')}}">Ver Donadores</a>
                    @endcan
                    <div class="collapse navbar-collapse " id="navbarSupportedContent" style="margin-right: 5%">
                        <ul class="navbar-nav ms-auto" style="float: right">
                                <li class="nav-item"  style="float: right" >
                                    <a class="nav-link" style="color: #ffffff" href="{{route('banner.nuevo')}}">Acerca de</a>
                                </li>
                            @guest
                                
                                @if (Route::has('login'))
                                    <li class="nav-item" style="float: right" >
                                        <a class="nav-link" style="color: #ffffff" href="{{ route('login') }}">Iniciar Sesión</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item"style="float: right">
                                        <a class="nav-link" style="color: #ffffff"href="{{ route('register') }}">Registrate</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown"style="float: right">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" style="color: #ffffff"  role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
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
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
