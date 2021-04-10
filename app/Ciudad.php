<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'codigo_postal', 'provincia_id',
    ];

    protected $table = 'ciudades';

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }
}
