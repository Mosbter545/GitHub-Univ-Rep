@extends('layout.app')

@section('titulo', 'Lista de Posts')

@section('content')
<div class="container-fluid">
    <div class="row min-vh-100">
        <!-- Menú lateral -->
        <div class="col-md-3 col-lg-2 bg-light border-end py-4">
            <h5 class="text-center text-primary fw-bold mb-4">Menú</h5>
            <div class="nav flex-column nav-pills gap-2 px-3">
                <a href="{{ url('/create') }}" class="btn btn-outline-success text-start">
                    <i class="bi bi-plus-circle"></i> Crear
                </a>
                <a href="{{ url('/edit') }}" class="btn btn-outline-primary text-start">
                    <i class="bi bi-pencil-square"></i> Editar
                </a>
                <a href="{{ url('/show') }}" class="btn btn-outline-warning text-start">
                    <i class="bi bi-info-circle"></i> Detalles
                </a>
            </div>
        </div>

        <!-- Contenido principal -->
        <div class="col-md-9 col-lg-10 py-5">
            <h1 class="mb-4 display-5 text-primary fw-bold text-center">
                Lista de Posts
            </h1>

<div class="container mt-4">

    <!-- Formulario de filtro -->
    <form method="GET" action="{{ url('/posts') }}" class="mb-3">
        <label for="estado" class="form-label">Filtrar por estado:</label>
        <select name="estado" id="estado" class="form-select w-auto d-inline-block" onchange="this.form.submit()">
            <option value="">Todos</option>
            <option value="borrador" {{ request('estado') == 'borrador' ? 'selected' : '' }}>Borrador</option>
            <option value="publicado" {{ request('estado') == 'publicado' ? 'selected' : '' }}>Publicado</option>
        </select>
    </form>

    @if($post->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Contenido</th>
                        <th>Imagen</th>
                        <th>Estado</th>
                        <th>Fecha de Publicación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->titulo }}</td>
                            <td>{{ Str::limit($p->contenido, 50) }}</td>
                            <td>
                                @if($p->imagen_url)
                                    <img src="{{ $p->imagen_url }}" alt="Imagen" width="80">
                                @else
                                    Sin imagen
                                @endif
                            </td>
                            <td>{{ $p->estado }}</td>
                            <td>{{ \Carbon\Carbon::parse($p->fecha_publicacion)->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-warning text-center">
            No hay publicaciones disponibles.
        </div>
    @endif
</div>
















        </div>
    </div>
</div>
@endsection










@section('autores')
    <div class="text-center text-muted small">
        <p>Autor de la página: Pollo 🐔 | Blade con Bootstrap 5</p>
    </div>
@endsection
