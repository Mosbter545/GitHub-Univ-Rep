<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
         protected $fillable = [
        'titulo',
        'contenido',
        'imagen_url',
        'estado',
        'fecha_publicacion',];
public function setTituloAttribute($value)
{
       $this->attributes["titulo"] = strtoupper($value);
}

//Filtro del Modelo con eloquent

public function scopeFilterbyEstado(Builder $query, $estado)
{
    return $query->where('estado', $estado);
}

















}