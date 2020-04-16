<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function actions()
    {
        return $this->hasMany('App\Action');
    }

    public function actors()
    {
        return $this->belongsToMany('App\Actor', 'project_actors');
    }

    public function news()
    {
        return $this->belongsToMany('App\Action', 'project_news');
    }

    public function purchases()
    {
        return $this->belongsToMany('App\Action', 'project_purchases');
    }
}
