<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-dark">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0 d-flex align-items-center">
                    <li>
                        <div class="logo d-flex align-items-center">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo">
                        </div>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="text-white" href="{{ route('home') }}" aria-current="page">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="text-white" href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="text-white" href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="text-white" href="{{ route('about') }}">About</a>

                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="text-white dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Admin</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('comics.index') }}">Comics</a>
                            <a class="dropdown-item" href="{{ route('movies.index') }}">Movies</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
