<?php

namespace App\Http\Resources\typeOfProject;

use Illuminate\Http\Resources\Json\Resource;

class TypeOfProjectResourceCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if ($this->typeOfAssistanceRequiredId == 1) {
            # code...
            return [
                'id'=> $this->id,
                'projectName'=>$this->projectName,
                'typeOfProject'=>$this->belongsToTypeOfProject->name,
                'projectDemographic'=>$this->belongsToProjectDemographic->name,
                'projectDetails'=>$this->projectDetails,
                'typeOfAssistanceRequired'=> $this->belongsToTypeOfAssistance->assistanceName,
                'projectProposer'=>$this->belongsToProjectProposer->name,
                'projectProposerImage'=>$this->belongsToProjectProposer->proposerImage,
                'dateubmitted'=>$this->created_at,   
                'financialDocumentation'=>[
                    'href' => $this->financialBreakDownDocumentLocation
                ],
                'businessCaeDocumentation'=>[
                    'href'=>$this->businessCaseDocumentLocation
                ]    
            ];        
        } else {
            # code...   
            // dd($this->belongsToTypeOfAssistance->assistanceName);         
                return[
                            'id'=> $this->id,
                            'projectName'=>$this->projectName,
                            'typeOfProject'=>$this->belongsToTypeOfProject->name,
                            'projectDemographic'=>$this->belongsToProjectDemographic->name,
                            'projectDetails'=>$this->projectDetails,
                            'typeOfAssistanceRequired'=> $this->belongsToTypeOfAssistance->assistanceName,
                            // 'typeOfAssistanceRequired'=> $this->belongsToTypeOfAssistance->assistanceName,                                                                
                            'projectProposer'=>$this->belongsToProjectProposer->name,
                            'projectProposerImage'=>$this->belongsToProjectProposer->proposerImage,
                            'dateubmitted'=>$this->created_at                                    
            ];
        }         
    }
}
