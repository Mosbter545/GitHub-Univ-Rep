@extends('layout.app')

@section('titulo', 'Crear Post')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4 text-success fw-bold">📝 Crear Nuevo Post</h1>

        <!-- Aquí podría ir el formulario de creación -->

        <!-- Botón para volver -->
        <div class="d-flex justify-content-start mt-4">
            <a href="{{ url('/index') }}" class="btn btn-primary">
                <i class="bi bi-arrow-left-circle"></i> Volver
            </a>
        </div>
    </div>
@endsection

@section('autores')
    <div class="container text-muted small text-center mt-4">
        <p>Formulario creado por Pollo 🐔</p>
    </div>
@endsection
