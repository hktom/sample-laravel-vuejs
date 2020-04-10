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
            'name' => $this->label,
            'image' => $this->image,
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
            'ponc'=>$this->ponc,
            'state'=>$this->state,
        ];
    }
}
