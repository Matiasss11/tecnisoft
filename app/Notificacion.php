<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mensaje', 'visto', 'personal_id', 'estado_lectura_id', 'tipo_notificacion_id'
    ];

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }

    public function estadoLectura()
    {
        return $this->belongsTo(EstadoLectura::class);
    }

    public function tipoNotificacion()
    {
        return $this->belongsTo(TipoNotificacion::class);
    }
}
