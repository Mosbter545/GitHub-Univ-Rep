<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeCalculatorController extends Controller
{
function calculate($year) {
    // Validar que sea numérico
    if (!is_numeric($year)) {
        abort(400, 'El año debe ser un número');
    }
    
    // Convertir a entero
    $year = (int)$year;
    
    // Validar rango razonable (1900-año actual)
    $currentYear = date('Y');
    if ($year < 1900 || $year > $currentYear) {
        abort(400, "El año debe estar entre 1900 y $currentYear");
    }
    
    // Calcular edad
    $age = $currentYear - $year;
    
    return view('Age/calculate', [
        "birth_year" => $year,
        "current_age" => $age,
        "current_year" => $currentYear
    ]);
}
}
