<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function oranisation()
    {
        return $this->belongsTo('App\Entreprise');
    }
}
