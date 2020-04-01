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
        return $this->belongsToMany('App\User', 'action_authors');
    }

    public function collaborators()
    {
        return $this->belongsToMany('App\User', 'action_collaborators');
    }

    public function responsables()
    {
        return $this->belongsToMany('App\Entreprise', 'action_responsables');
    }

    public function realisators()
    {
        return $this->belongsToMany('App\Entreprise', 'action_realisators');
    }

    // public function cases()
    // {
    //     return $this->hasMany('App\Case', 'case_id');
    // }

    // public function echelles()
    // {
    //     return $this->hasMany('App\Echelles', 'echelle_id');
    // }

    // public function fields()
    // {
    //     return $this->hasMany('App\Field', 'field_id');
    // }

    public function orientations()
    {
        return $this->hasMany('App\Orientation', 'orientation_id');
    }

    public function ponc()
    {
        return $this->belongsTo('App\Ponc');
    }

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    // public function types()
    // {
    //     return $this->hasMany('App\Type', 'type_id');
    // }

    public function bugets()
    {
        return $this->hasMany('App\Budget');
    }

    public function calendars()
    {
        return $this->hasMany('App\Calendar');
    }
}
