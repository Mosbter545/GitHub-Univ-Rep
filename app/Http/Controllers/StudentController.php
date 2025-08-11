<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
function show($nombre, $edad) {
    // Validación básica del nombre (solo letras y espacios)
    if (!ctype_alpha(str_replace(' ', '', $nombre))) {
        abort(400, 'El nombre solo puede contener letras y espacios');
    }
    
    // Validación básica de la edad (número entero positivo)
    if (!ctype_digit($edad) || $edad < 0 || $edad > 120) {
        abort(400, 'La edad debe ser un número entero entre 0 y 120');
    }
    
    return view('Student/show', [
        "nombre" => $nombre,
        "edad" => (int)$edad
    ]);
}
}
