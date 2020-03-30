<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    public function action()
    {
        return $this->belongsTo('App\Action');
    }

    public function applications()
    {
        return $this->hasMany('App\Application');
    }

}
