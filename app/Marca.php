<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    public function envasados()
    {
        return $this->hasOne(Envasado::class, 'marca_codigo');
    }
}
