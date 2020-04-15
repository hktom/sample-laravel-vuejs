<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'ca_principal' => $this->ca_principal,
            'name' => $this->name,
            'image' => $this->image,
            'vision' => $this->vision,
            'intro' => $this->intro,
            'context'=>$this->context,
            'to_know'=>$this->to_know,
            'to_enrich'=>$this->to_enrich,
            'to_value'=>$this->to_value,
            'actors'=>$this->actors,
            'actions'=>$this->actions,
            'color'=>$this->color,
            'icon'=>$this->icon,
        ];
    }
}
