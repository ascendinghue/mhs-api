<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Step as StepResource;

class Document extends JsonResource
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
            'filename' => $this->filename,
            'project_id' => $this->project_id,
            'notes' => $this->notes,
            'author' => $this->author,
            'document_date' => $this->document_date,
            'document_type' => $this->document_type,
            'published' => $this->published,
            'publish_date' => $this->publish_date,
            'checked_out' => $this->checked_out,
            'steps' => StepResource::collection($this->steps)
        ];
    }
}