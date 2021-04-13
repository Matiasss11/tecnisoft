<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoInscripcion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_inscripcion_desde', 'fecha_inscripcion_hasta',
        'fecha_vacacion_desde',   'fecha_vacacion_hasta', 'personal_id', 'periodo_vacacion_id'

    ];

    protected $table = 'periodo_inscripciones';

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }

    public function periodoVacacion()
    {
        return $this->belongsTo(PeriodoVacaciones::class);
    }
}
