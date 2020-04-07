<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class implementation extends Model
{
    protected $fillable = ['responsable' ,'realisator'];

    public function action()
    {
        return $this->belongsTo('App\Action');
    }
}
