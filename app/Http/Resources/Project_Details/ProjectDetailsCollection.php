<?php

namespace App\Http\Resources\Project_Details;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProjectDetailsCollection extends ResourceCollection
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
            'id' => $this->id,
            'projectName' => $this->projectName,
            'type_of_projects_id' => $this->typeOfProject->id,
            'projectDemographicId' => $this->projectDemographic->id,
            'projectDetails' => $this->projectDetails,
            'typeOfAssistanceRequiredId' => $this->typeOfAssistance->id,
            'projectProposerId' => $this->projectProposer->id,
            'financialBreakDownDocumentLocation' => $this->financialBreakDownDocumentLocation,
            'businessCaseDocumentLocation' => $this->businessCaseDocumentLocation,
            'asistanceRequiredToRefineDocuments' => $this->asistanceRequiredToRefineDocuments,
            'approved' => $this->approved,
            'approvedById' => $this->User->id
        ];
    }
}
