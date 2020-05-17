<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectDetail extends Model
{

    protected $guarded = ['id'];

    public function belongsToProjectProposer()
    {
        return $this->belongsTo('App\projectProposer', 'projectProposerId', 'id');
    }

    public function belongsToProjectDemographic()
    {
        return $this->belongsTo('App\projectDemographic', 'projectDemographicId', 'id');
    }

    public function belongsToTypeOfAssistance()
    {
        return $this->belongsTo('App\typeOfAssistance', 'typeOfAssistanceRequiredId', 'id');
    }

    public function belongsToApprover()
    {
        return $this->belongsTo('App\User', 'approvedById', 'id');
    }

    public function belongsToTypeOfProject()
    {
        return $this->belongsTo('App\typeOfProject', 'typeOfProjectId', 'id');
    }
    
}
