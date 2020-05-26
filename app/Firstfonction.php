<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firstfonction extends Model
{
    protected $fillable = ['label', 'amount'];

    public function newstate()
    {
        return $this->belongsTo('App\Newstate', 'state_id');
    }
}
