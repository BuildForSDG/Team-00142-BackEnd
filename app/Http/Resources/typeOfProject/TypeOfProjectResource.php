<?php

namespace App\Http\Resources\typeOfProject;

use Illuminate\Http\Resources\Json\JsonResource;

class TypeOfProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        if ($this->typeOfAssistanceRequiredId == 1) {
            
            return [
                'id'=> $this->id,
                'projectName'=>$this->projectName,
                'typeOfProject'=>$this->belongsToTypeOfProject->name,
                'projectDemographic'=>$this->belongsToProjectDemographic->name,
                'projectDetails'=>$this->projectDetails,
                'typeOfAssistanceRequired' => $this->belongsToTypeOfAssistance
                                                    ->assistanceName,           
                'projectProposer'=>$this->belongsToProjectProposer->name,
                'dateubmitted'=>$this->approvedAt,   
                'financialDocumentation'=>[
                    'href' => $this->financialBreakDownDocumentLocation
                ],
                'businessCaeDocumentation'=>[
                    'href'=>$this->businessCaseDocumentLocation
                ]    
            ];        
        } else {
                      
                return[
                            'id'=> $this->id,
                            'projectName'=>$this->projectName,
                            'typeOfProject'=>$this->belongsToTypeOfProject->name, 
                            'projectDemographic'=>$this->belongsToProjectDemographic
                                                        ->name,
                            'projectDetails'=>$this->projectDetails,
                            'typeOfAssistanceRequired'=> $this->belongsToTypeOfAssistance
                                                              ->assistanceName,
                            'projectProposer'=>$this->belongsToProjectProposer->name,
                            'dateubmitted'=>$this->approvedAt                       
            ];
        }     
    }
}
