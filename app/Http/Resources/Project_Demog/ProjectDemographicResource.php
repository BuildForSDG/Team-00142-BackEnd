<?php

namespace App\Http\Resources\Project_Demog;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectDemographicResource extends ResourceCollection
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
            'name'=>$this->name
        ];
    }
}
