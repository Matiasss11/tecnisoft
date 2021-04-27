<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoVacacion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion'
    ];

    protected $table = 'estado_vacaciones';

    
}
