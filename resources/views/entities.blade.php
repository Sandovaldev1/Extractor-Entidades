<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Extractor de Entidades</title>
    <link rel="shortcut icon"
        href="https://images.vexels.com/media/users/3/142890/isolated/preview/4ea2d7c4bf3cad23a4f18ee58752deb8-logotipo-de-anillos-de-alta-tecnologia.png"
        type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <header>
        @include('navbar')
    </header>

    <!-- Sección del título principal-->
    <section id="home">
        <!-- Jumbotron -->
        <div class="jumbotron jumbotron-fluid bg-primary text-white">
            <div class="container">
                <h1 class="display-4">Bienvenido al Extractor de Entidades</h1>
                <p class="lead">Extraiga y analice de manera eficiente entidades clave de cualquier URL con nuestra
                    herramienta avanzada, por Sandovaldev21.</p>
            </div>
        </div>
    </section>

    <!--Sección del formulario-->
    <section id="form-section" class="container-fluid">
        <div class="container mt-5">
            <h1>Extractor de Entidades</h1>
            <form id="url-form">
                <div class="form-group">
                    <label for="url">ingresa la URL: 🔗</label>
                    <input type="url" id="url" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Extraer Entidades</button>
            </form>
            <div class="mt-5">
                <h3>Top 5 Entidades</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Prominencia</th>
                        </tr>
                    </thead>
                    <tbody id="entity-table-body">
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!--Sección de cuadros informativos -->
    <section id="about" class="container-fluid section-3 ">
        <div class="container">
            <div class="row">
                <!-- Cuadro de texto a la izquierda -->
                <div class="col-md-6 mt-3">
                    <div class="content-box centered-content">
                        <h4>Análisis de Texto Avanzado</h4>
                        <p>Nuestra aplicación utiliza tecnología de vanguardia para analizar y extraer entidades clave
                            de cualquier texto. Identificamos nombres, ubicaciones, fechas y otros elementos
                            importantes, proporcionando una visión profunda y detallada de los contenidos. Ideal para
                            investigaciones, análisis de datos y más.</p>
                    </div>
                </div>
                <!-- Cuadro de texto a la derecha -->
                <div class="col-md-6 mt-3">
                    <div class="content-box centered-content">
                        <h4>Visualización de Resultados</h4>
                        <p>Ofrecemos una interfaz intuitiva que muestra las entidades extraídas en un formato claro y
                            fácil de entender. Los resultados se organizan en tablas y gráficos para una rápida
                            interpretación. La visualización detallada ayuda a identificar patrones y tendencias en los
                            datos.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Cuadro de texto inferior izquierdo -->
                <div class="col-md-6 mt-3">
                    <div class="content-box centered-content">
                        <h4>Interfaz Amigable para el Usuario</h4>
                        <p>Nuestra plataforma está diseñada pensando en el usuario. Con una interfaz simple y accesible,
                            puedes iniciar el análisis de texto en segundos. Sin complicaciones, solo carga tu URL y
                            obtén resultados precisos en tiempo real.</p>
                    </div>
                </div>
                <!-- Cuadro de texto inferior derecho -->
                <div class="col-md-6 mt-3">
                    <div class="content-box centered-content">
                        <h4>Integración con Otras Herramientas</h4>
                        <p>La aplicación está diseñada para integrarse fácilmente con otras herramientas y sistemas.
                            Exporta los resultados en formatos compatibles o conecta nuestra API con tus aplicaciones
                            existentes para una mayor flexibilidad y funcionalidad en tus flujos de trabajo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Footer -->
    <footer>
        @include('footer')
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>