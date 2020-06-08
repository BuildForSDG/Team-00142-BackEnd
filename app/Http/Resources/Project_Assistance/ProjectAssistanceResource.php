<?php

namespace App\Http\Resources\Project_Assistance;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectAssistanceResource extends ResourceCollection
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
            'assistanceName'=>$this->assistanceName
        ];
    }
}
