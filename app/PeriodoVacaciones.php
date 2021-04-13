<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoVacaciones extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'periodo'
    ];

    protected $table = 'periodo_vacaciones';
    
    public function periodoInscripcion()
    {
        return $this->hasMany(PeriodoInscripcion::class);
    }
}
