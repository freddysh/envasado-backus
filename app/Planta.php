<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    //
    public function envasados()
    {
        return $this->hasMany(Envasado::class);
    }
}
