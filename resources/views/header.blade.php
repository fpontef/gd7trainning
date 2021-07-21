<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">GD7 Trainning</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Página Principal</a> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/movie') }}">Treinamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user') }}">Usuários</a>
                </li>
            </ul>

            <ul class="navbar-nav justify-content-end">
                @if(session()->has('user'))
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{session()->get('user')['name']}}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">
                                Logout
                            </a></li>
                    </ul>
                </li>
                @else
                <li><a class="btn btn-outline-primary" href="{{ url('/login') }}">Login</a></li>
                @endif
            </ul>
            <!-- <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
      </div> -->
        </div>
    </div>
</nav>
