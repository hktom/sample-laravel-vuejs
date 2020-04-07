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
            'name' => $this->name,
            'vision' => $this->vision,
            'intro' => $this->intro,
            'context'=>$this->context,
            'to_know'=>$this->to_know,
            'to_enrich'=>$this->to_enrich,
            'to_value'=>$this->to_value
        ];
    }
}
