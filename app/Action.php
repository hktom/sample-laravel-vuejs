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

    public function responsables()
    {
        return $this->belongsToMany('App\Actor', 'responsable_actions');
    }

    public function realisators()
    {
        return $this->belongsToMany('App\Actor', 'realisator_actions');
    }

    public function echelles()
    {
        return $this->belongsToMany("App\Echelle", "echelle_actions");
    }

    public function types()
    {
        return $this->belongsToMany("App\Type", "type_actions");
    }

    public function states()
    {
        return $this->belongsToMany("App\State", "state_actions");
    }

    public function caracteristics()
    {
        return $this->hasMany('App\Caracteristic', 'action_id');
    }

    public function ponc()
    {
        return $this->belongsTo('App\Ponc');
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
