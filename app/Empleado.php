<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo_empleado', 'conduce', 'personal_id'
    ];

    public function personal(): BelongsTo
    {
        return $this->belongsTo(Personal::class);
    }
}
