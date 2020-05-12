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
        return $this->belongsToMany('App\Actor', 'newstates_actors', 'newstates_id');
    }

    public function fonct31()
    {
        return $this->hasMany('App\Firstfonction', 'state_id');
    }

    public function fonct36()
    {
        return $this->hasMany('App\Secondfonction', 'state_id');
    }

    public function rhs()
    {
        return $this->hasMany('App\Rh', 'state_id');
    }

    public function others()
    {
        return $this->hasMany('App\Other', 'state_id');
    }

    public function invests()
    {
        return $this->hasMany('App\invest', 'state_id');
    }
}
