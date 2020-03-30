<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function budget()
    {
        return $this->belongsTo('App\Budget');
    }

    public function fonctions()
    {
        return $this->hasMany('App\Fonction');
    }
}
