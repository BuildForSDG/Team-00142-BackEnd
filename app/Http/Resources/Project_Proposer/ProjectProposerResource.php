<?php

namespace App\Http\Resources\Project_Proposer;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectProposerResource extends ResourceCollection
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
            'phoneNumber'=>$this->phoneNumber,
            'email'=>$this->email,
            'nationalId'=>$this->nationalId,
            'name'=>$this->name
        ];
    }
}
