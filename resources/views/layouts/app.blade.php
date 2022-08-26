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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <img src="{{ asset('images/photos/logo_fond_vert.jpeg') }}" alt="Logo" style="width:80px;"
                class="rounded-pill">
            <div class="container-fluid" id="navbar">

                <a class="navbar-brand text-center" href="#">Les randonneurs du Marais</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">A propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('activites.index') }}">Randonnées</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('photos.index') }}">Souvenirs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"href="{{ route('contact.index') }}">Contact</a>
                        </li>
                        <!--QUAND ADMINISTRATEUR : METTRE VISIBLE CE DROPDOWN-->
                        @if (Auth::user() && Auth::user()->role_id == 6)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Administrateur
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('admin.index') }}">Adhérents</a>
                                    </li>
                                    <li><a class="dropdown-item" href="">Documents</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{route('admin.index')}}">Randonnées</a>
                                    </li>
                                    <li><a class="dropdown-item" href="">Comptes-rendus</a></li>
                                    <li><a class="dropdown-item" href="">Actualités</a>
                                    </li>
                                    <li><a class="dropdown-item" href="">Photos</a></li>
                                </ul>
                            </li>
                            <!--QUAND TRESORIERE OU PRESIDENTE : METTRE VISIBLE CE DROPDOWN-->
                        @elseif (Auth::user() && Auth::user()->role_id == 5)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Administrateur
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="">Trésorerie ou pésidente</a></li>
                                </ul>
                            </li>
                            <!--QUAND SECRETAIRE : METTRE VISIBLE CE DROPDOWN-->
                        @elseif (Auth::user() && Auth::user()->role_id == 4)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Administrateur
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="">bureau</a></li>
                                    <li><a class="dropdown-item" href="">dqqdzdqz</a></li>
                                </ul>
                            </li>
                            <!--QUAND ANIMATEUR : METTRE VISIBLE CE DROPDOWN-->
                        @elseif (Auth::user() && Auth::user()->role_id == 3)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Administrateur
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="">animateurs</a></li>
                                </ul>
                            </li>
                            <!--QUAND BALISEUR : METTRE VISIBLE CE DROPDOWN-->
                        @elseif (Auth::user() && Auth::user()->role_id == 2)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Administrateur
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="">baliseurs</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="compte">Mon compte</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->nom }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('') }}
                                </a>
                                <form id="logout-form" class="text-center" action="{{ route('logout') }}"
                                    method="POST">
                                    <input type="submit" value="Deconnexion">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    @endguest
                </ul>

            </div>
            <img src="{{ asset('images/photos/logo_ffrVendee.png') }}" alt="Logo" style="width:80px;"
                class="rounded-pill">
        </nav>
    </div>


    <div class="container w-50 text-center p-3">

        @if (session()->has('message'))
            <p class="alert alert-success">{{ session()->get('message') }}</p>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>




    <main class="py-4">
        @yield('content')

    </main>
    </div>
    <footer>
        <div class="container-fluid" id="footer">
            <div class="copyright">
                <img src="{{ asset('images/photos/logo_fond_vert.jpeg') }}" alt="Logo" style="width:60px;" class="rounded-pill">
            </div>
        
            <div class="details_2">
                <button type="button" class="btn-1">Copyright<a href="#"></a></button>
                <button type="button" class="btn-1">Mentions Légales<a href="#"></a></button>
                <button type="button" class="btn-1">Politique de confidentialité<a href="#"></a></button>
            </div>
        
            <div class="copyright">
                <p>Les Randonneurs du Marais Sud Vendée - 2022 par FLORIANE SIEDLECKI.</p>
            </div>
            </div>
        </div>
    </footer>
</body>

</html>
