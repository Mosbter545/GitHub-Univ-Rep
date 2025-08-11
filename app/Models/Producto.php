<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'precio',
        'cantidad',
        'descripcion',
    ];

    protected function nombre(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => strtolower($value),   // Al obtenerlo: minúsculas
            set: fn ($value) => strtoupper($value),   // Al guardarlo: mayúsculas
        );
    }

        protected function precio(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => number_format($value, 2, '.', ''), // Ej. 49 -> "49.00"
            set: fn ($value) => $value // Almacena tal como lo recibe
        );
    }

        protected function descripcion(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => mb_strimwidth($value, 0, 30, '...'), // Si se excede, añade "..."
            set: fn ($value) => $value
        );
    }
}