<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" aria-current="page">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('about') }}">About</a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Admin</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('comics.index') }}">Dashoboard</a>
                            <a class="dropdown-item" href="{{ route('comics.create') }}">Add new Comic</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
