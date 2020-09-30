<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio')}}">Geincos App Books <i class="fa fa-book" aria-hidden="true"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('inicio')}}" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Books
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('inicio')}}"><i class="fa fa-book" aria-hidden="true"></i>All Books</a>
                        <a class="dropdown-item" href="{{ route('create')}}"><i class="fa fa-pencil" aria-hidden="true"></i>Create A Book</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="https://github.com/Gabriel-Villa/Geincos_Project"><i class="fa fa-github" aria-hidden="true"></i>Mi Github</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>