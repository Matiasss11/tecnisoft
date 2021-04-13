<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoLectura extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion'
    ];

    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class);
    }

}
