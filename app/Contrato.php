<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fecha_expiracion', 'tipo_contratacion_id', 'personal_id'
    ];

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
    
    public function tipoContratacion()
    {
        return $this->belongsTo(TipoContratacion::class);
    }
}
