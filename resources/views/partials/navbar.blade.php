<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="{{ route('inicio')}}">Examen</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" 
    aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alumnos') }}">Alumnos</a>
        
                 </li>
        </ul>
</div>
</nav>