<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoInscripcion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion'
    ];

    protected $table = 'estado_inscripciones';

    /**
     * Get all of the comments for the EstadoInscripcion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripcionVacaciones(): HasMany
    {
        return $this->hasMany(InscripcionVacacion::class);
    }
}
