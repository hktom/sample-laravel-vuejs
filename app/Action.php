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
        return $this->hasMany('App\ActionFinancement', 'user_id');
    }

    public function responsables()
    {
        return $this->hasMany('App\ActionResponsable', 'user_id');
    }

    public function authors()
    {
        return $this->hasMany('App\ActionAuthor', 'user_id');
    }

    public function collaborators()
    {
        return $this->hasMany('App\ActionCollaborator', 'user_id');
    }

    public function realisators()
    {
        return $this->hasMany('App\ActionRealisators', 'user_id');
    }

    public function cases()
    {
        return $this->hasMany('App\Case', 'case_id');
    }

    public function echelles()
    {
        return $this->hasMany('App\Echelles', 'echelle_id');
    }

    public function fields()
    {
        return $this->hasMany('App\Field', 'field_id');
    }

    public function orientations()
    {
        return $this->hasMany('App\Orientation', 'orientation_id');
    }

    public function states()
    {
        return $this->hasMany('App\State', 'state_id');
    }

    public function types()
    {
        return $this->hasMany('App\Type', 'type_id');
    }

    public function bugets()
    {
        return $this->hasMany('App\Budget');
    }

    public function calendars()
    {
        return $this->hasMany('App\Calendar');
    }
}
