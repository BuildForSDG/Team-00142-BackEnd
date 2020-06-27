<?php

namespace App\Http\Resources\Project_Proposer;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectProposerCollection extends ResourceCollection
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
            'id'=>$this->id,
            'phoneNumber'=>$this->phoneNumber,
            'email'=>$this->email,
            'nationalId'=>$this->nationalId,
            'name'=>$this->name
        ];
    }
}
