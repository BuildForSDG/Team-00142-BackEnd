<?php

namespace App\Http\Resources\Project_Type;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectTypeResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name'=>$this->name,
            'description'=>$this->description
        ];
    }
}
