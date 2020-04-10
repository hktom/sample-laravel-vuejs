<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }

    public function financement()
    {
        return $this->hasMany('App\ActionFinancement');
    }


    public function authors()
    {
        return $this->belongsToMany('App\Actor', 'author_actions');
    }

    public function collaborators()
    {
        return $this->belongsToMany('App\Actor', 'collaborator_actions');
    }

    // public function responsables()
    // {
    //     return $this->belongsToMany("App\Actor", "responsable_actors");
    // }

    // public function realisators()
    // {
    //     return $this->belongsToMany("App\Actor", "realisator_actors");
    // }

    public function caracteristics()
    {
        return $this->hasMany('App\Caracteristic', 'action_id');
    }

    public function ponc()
    {
        return $this->belongsTo('App\Ponc');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function bugets()
    {
        return $this->hasMany('App\Budget');
    }

    public function calendars()
    {
        return $this->hasMany('App\Calendar');
    }

    public function implementations()
    {
        return $this->hasMany('App\Implementation');
    }

    public function projects()
    {
        return $this->belongsToMany('App\Project', 'project_actions');
    }

    public function actions()
    {
        return $this->belongsToMany('App\Action', 'action_actions', 'action_link_id', 'action_id');
    }
}
