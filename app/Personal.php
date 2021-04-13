<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    public function domicilio()
    {
        return $this->belongsTo(Domicilio::class);
    }

    public function sexo()
    {
        return $this->belongsTo(Sexo::class);
    }

    public function notificaciones()
    {
        return $this->hasMany(Notificacion::class);
    }

    public function periodoInscripcion()
    {
        return $this->hasMany(PeriodoInscripcion::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function empleado(): HasOne
    {
        return $this->hasOne(Empleado::class);
    }
}
