<?php

namespace App\Http\Resources;

use App\Http\Resources\CrudResource;
use Illuminate\Http\Resources\Json\JsonResource;

class NameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(
            ['id' => $request->id], 
            $request->toArray(),
            ['aliases' => CrudResource::collection($this->whenLoaded('aliases'))]
        );
    }
}