@extends('layout.app')

@section('titulo', 'Editar Post')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4 text-primary fw-bold">✏️ Editar Post</h1>

        <!-- Aquí podrías colocar el formulario de edición -->

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
        <p>Editor de Post por Pollo 🐔</p>
    </div>
@endsection
