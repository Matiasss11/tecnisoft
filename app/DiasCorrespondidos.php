<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiasCorrespondidos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'año_desde', 'año_hasta', 'cantidad_dias',
    ];
}
