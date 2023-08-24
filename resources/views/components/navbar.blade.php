<nav class="navbar navbar-expand-lg bg-2 text-white sticky-top">

    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}"><img src="/media/PressPioneersLogo.png" alt="Logo"
                class="vh-5"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ps-5 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white ps-5" aria-current="page" href="{{ route('homepage') }}">Homepage</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-white" href="#">News</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    {{-- dropdown category correggere collegamento --}}
                    <ul class="dropdown-menu bg-3">
                        {{-- <li><a class="dropdown-item dropdown-hover" href="#">Le più lette</a></li> --}}
                        <li><a class="dropdown-item dropdown-hover" href="./article/index">Tutti gli articoli</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="./article/category/1">Politica</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="./article/category/2">Economia</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="./article/category/3">Food&Drink</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="./article/category/4">Sport</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="./article/category/5">Intrattenimento</a></li>
                        <li><a class="dropdown-item dropdown-hover" href="./article/category/6">Tech</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Chi siamo
                    </a>
                    <ul class="dropdown-menu bg-3">
                        {{-- <li><a class="dropdown-item dropdown-hover" href="#">Il nostro team</a></li> --}}
                        <li><a class="dropdown-item dropdown-hover" href="{{ route('careers') }}">Lavora con noi</a>
                        </li>
                    </ul>
                </li>
            </ul>


            @auth

                <li class="nav-item dropdown p-2">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Benvenuto, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- <li><a href="" class="dropdown-item dropdown-hover">Profilo</a></li>
                        <li> --}}

                        </li>
                        <li><a href="#" class="dropdown-item dropdown-hover"
                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                        </li>
                        <form action="{{ route('logout') }}" method="post" id="form-logout" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>

            @endauth

            @guest
                <li class="nav-item dropdown m-3">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Benvenuto, ospite
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="{{ route('register') }}" class="dropdown-item dropdown-hover">Registrati</a></li>
                        <li><a href="{{ route('login') }}" class="dropdown-item dropdown-hover">Accedi</a></li>
                    </ul>
                </li>
            @endguest

            @if (Auth::check() && Auth::user()->is_admin)
                <li><a class="dropdown-item m-3" href="{{ route('admin.dashboard') }}">Dashboard dell'Admin</a></li>
            @endif


            @if (Auth::check() && Auth::user()->is_revisor)
                <li><a class="dropdown-item m-3" href="{{ route('revisor.dashboard') }}">Dashboard del revisore</a></li>
            @endif

            @if (Auth::check() && Auth::user()->is_writer)
                <a href="{{ route('article.create') }}" class="btn custom-2 m-2">
                    <li class="nav-item">
                        <span class="card-link">Inserisci un articolo</span>
                    </li>
                </a>
            @if (Auth::user()->is_writer)
            <li><a class="dropdown-item" href="{{route('writer.dashboard')}}">Dashboard del redattore</a></li>
            @endif

            
            @endif


            <form class="d-flex" method="GET" action="{{ route('article.search') }}">
                <input class="form-control me-2" type="search" name="query" placeholder="Cerca in AulabPost"
                    aria-label="Search">
                <button class="btn custom-2" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

</nav>
