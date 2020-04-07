<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caracteristic extends Model
{
    protected $fillable = ['type', 'state', 'echelle'];

    public function action()
    {
        return $this->belongsTo('App\Action', 'action_id');
    }
}
