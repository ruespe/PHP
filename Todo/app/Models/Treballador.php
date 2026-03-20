<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treballador extends Model
{
    protected $primaryKey = 'dni';

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dni',
        'nom',
        'cognom1',
        'cognom2',
        'correu',
        'telefon'
    ];
}
