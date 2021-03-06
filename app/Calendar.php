<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = ['year_2020' ,'year_2021', 'year_2022', 'year_2023'];

    public function action()
    {
        return $this->belongsTo('App\Action');
    }
}
