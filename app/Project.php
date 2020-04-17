<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

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
