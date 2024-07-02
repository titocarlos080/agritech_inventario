<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Categoria extends Pivot
{
    //
    public $timestamps = true;
 
    // Especificar los atributos que se pueden asignar masivamente.
    protected $table = 'categorias';
    protected $fillable = ['nombre'];
    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class, 'id_categoria');
    }
    

}
