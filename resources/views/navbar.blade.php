<!--Definimos la estructura del navbar-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://images.vexels.com/media/users/3/142890/isolated/preview/4ea2d7c4bf3cad23a4f18ee58752deb8-logotipo-de-anillos-de-alta-tecnologia.png"
                alt="Bootstrap" width="30" height="24">
        </a>
    </div>
    <a class="navbar-brand nav-name" href="{{ url('/') }}">EDE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('#about') }}">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('#') }}">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('#') }}">Contacto</a>
            </li>
        </ul>
    </div>
</nav>