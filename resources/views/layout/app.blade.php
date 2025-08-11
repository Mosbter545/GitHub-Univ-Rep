<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>@yield('titulo')</title>
</head>
<body>
    <header class="bg-primary text-white py-3 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">
            👋 ¡Bienvenido a la aplicación de Posts!
        </h5>

        <div>
            {{-- Aquí podrías mostrar el nombre del usuario si usas autenticación --}}
            <span class="me-3">Usuario: <strong>Pollo</strong></span>
            <a href="{{ url('/inicio') }}" class="btn btn-outline-light btn-sm">
                <i class="bi bi-box-arrow-right"></i> Inicio
            </a>
            <a href="#" class="btn btn-outline-light btn-sm">
                <i class="bi bi-box-arrow-right"></i> Salir
            </a>
        </div>
    </div>
</header>

    <div>

        <!-- Contenido principal -->
        <main class="flex-fill">
            @hasSection('page_title')
                @yield('page_title')
            @endif

            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-light text-center py-3 mt-auto">
            @yield('autores')
        </footer>
    </div>

    <!-- Bootstrap JS Bundle (con Popper incluido) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous"></script>

    @hasSection('scripts')
        @yield('scripts')
    @endif
</body>
</html>
