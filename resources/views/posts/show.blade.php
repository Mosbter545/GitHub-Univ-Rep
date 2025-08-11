@extends('layout.app')

@section('titulo', 'Detalles del Post')

@section('content')
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Detalles del Post</h5>
            </div>
            <div class="card-body">
                <p class="text-muted mb-3">
                    Aquí puedes ver los detalles del post seleccionado.
                </p>

                <!-- Botón para editar post -->
                <a href="{{ url('/edit') }}" class="btn btn-warning">
                    <i class="bi bi-pencil-square"></i> Editar Post
                </a>
            </div>
        </div>

        <!-- Botón de volver debajo de la tarjeta -->
        <div class="d-flex justify-content-start mt-4">
            <a href="{{ url('/index') }}" class="btn btn-primary">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>
    </div>
@endsection

@section('autores')
    <div class="container text-muted small text-center mt-4">
        <p>Detalle de Post por Pollo 🐔</p>
    </div>
@endsection
