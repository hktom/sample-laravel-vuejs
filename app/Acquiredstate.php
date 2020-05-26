<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acquiredstate extends Model
{
    public function action()
    {
        return $this->belongsTo('App\Action');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Actor', 'acquiredstates_actors', 'acquiredstates_id');
    }
}
