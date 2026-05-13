<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treballador extends Model
{
    protected $primaryKey = 'dni'; // Clau Primaria personalitzada
    public $incrementing = false; // la Clau Primaria no es autoincremental
    protected $keyType = 'string'; // el tipus de la Clau Primaria
    protected $fillable = [
        'dni',
        'nom',
        'cognom1',
        'cognom2',
        'correu',
        'telefon'
    ];
    public function tasques()
    {
        return $this->belongsToMany(Tasca::class, 'tasca_treballador', 'treballador_dni', 'tasca_id');
    }
}
