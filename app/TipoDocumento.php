<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'abreviatura', 'definicion'
    ];

    public function personal()
    {
        return $this->hasMany(Personal::class);
    }
}
