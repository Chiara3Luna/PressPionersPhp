<x-layout>

    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                The Aulab Post
            </h1>
        </div>
    </div>

    @auth

        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Benvenuto, {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="" class="dropdown-item">Profilo</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a href="#" class="dropdown-item"
                        onclick="event.preventDefault(); document.querySelector('#form-logout'), submit();">Logout</a></li>
                <form action="{{ route('logout') }}" method="post" id="form-logout" class="d-none">
                    @csrf
                </form>
            </ul>
        </li>

        <li class="nav-item">
            <a href="{{route('article.create')}}" class="nav-link">Inserisci un articolo</a>
        </li>
    @endauth

    @guest
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Benvenuto, ospite
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="{{ route('register') }}" class="dropdown-item">Registrati</a></li>
                <li><a href="{{ route('login') }}" class="dropdown-item">Accedi</a></li>
            </ul>
        </li>
    @endguest
</x-layout>
