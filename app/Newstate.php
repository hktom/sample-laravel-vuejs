<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newstate extends Model
{
    public function action()
    {
        return $this->belongsTo('App\Action');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Actors', 'newstates_actors');
    }

    public function firstFonctions()
    {
        return $this->hasMany('App\FirstFonction', 'state_id');
    }

    public function secondFonctions()
    {
        return $this->hasMany('App\SecondFonction', 'state_id');
    }

    public function rhs()
    {
        return $this->hasMany('App\Rh', 'state_id');
    }

    public function others()
    {
        return $this->hasMany('App\Other', 'state_id');
    }

    public function invets()
    {
        return $this->hasMany('App\invest', 'state_id');
    }
}
