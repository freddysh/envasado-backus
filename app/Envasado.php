<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envasado extends Model
{
    //
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_codigo');
    }
}
