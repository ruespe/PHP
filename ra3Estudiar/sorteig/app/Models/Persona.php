<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'persones'; // nom de la taula perque no segueix el estándar plural del angles 
    protected $primaryKey = 'dni'; // Clau Primaria personalitzada
    public $incrementing = false; // la Clau Primaria no es autoincremental
    protected $keyType = 'string'; // el tipus de la Clau Primaria
    protected $fillable = [
        'dni',
        'nom',
        'cognom1',
        'cognom2',
        'telefon',
        'correu'
    ];
}
