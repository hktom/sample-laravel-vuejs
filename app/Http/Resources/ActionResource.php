<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ActionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'code' => $this->code,
            'project_id' => $this->project_id,
            'name' => $this->label,
            'image' => $this->image,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'R' => $this->R,
            'A' => $this->A,
            'E' => $this->E,
            'T' => $this->T,
            'indicator' => $this->indicator,
            'project'=>$this->project,
            'authors'=>$this->authors,
            'collaborators'=>$this->collaborators,
            'caracteristics'=>$this->caracteristics,
            'responsables'=>$this->responsables,
            'realisators'=>$this->realisators,
            'types'=>$this->types,
            'states'=>$this->states,
            'echelles'=>$this->echelles,
            'calendars'=>$this->calendars,
            'projects'=>$this->projects,
            'actions_link'=>$this->actions,
        ];
    }
}
