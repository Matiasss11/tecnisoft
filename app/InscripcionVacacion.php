<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionVacacion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_desde', 'fecha_hata', 'personal_id', 'estado_inscripcion_id', 'periodo_inscripcion_id'
    ];

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }

    public function periodoInscripcion()
    {
        return $this->belongsTo(PeriodoInscripcion::class);
    }

    public function estadoInscripcion()
    {
        return $this->belongsTo(EstadoInscripcion::class);
    }
}
