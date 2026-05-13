<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tasca extends Model
{
    protected $table = 'tasques';
    protected $fillable = [
        'titol',
        'descripcio',
        'prioritat',
        'stat',
        'categoria_id'
    ];
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function treballadors()
    {
        return $this->belongsToMany(Treballador::class, 'tasca_treballador', 'tasca_id', 'treballador_dni');
    }
}
