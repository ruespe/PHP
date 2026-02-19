<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Premi extends Model
{
    protected $table = 'premis';


    protected $fillable = [
        'nom',
        'valor',
    ];
}
