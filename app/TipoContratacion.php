<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoContratacion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion'
    ];

    protected $table = 'tipo_contrataciones';

    public function contratos()
    {
        return $this->hasMany(Contrato::class);
    }
}
