<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectDetail extends Model
{

    protected $guarded = ['id'];

    public function projectProposer()
    {
        return $this->belongsTo('App\projectProposer', 'projectProposerId', 'id');
    }

    public function projectDemographic()
    {
        return $this->belongsTo('App\projectDemographic', 'projectDemographicId', 'id');
    }

    public function typeOfAssistance()
    {
        return $this->belongsTo('App\typeOfAssistance', 'typeOfAssistanceRequiredId', 'id');
    }

    public function approver()
    {
        return $this->belongsTo('App\User', 'approvedById', 'id');
    }
    
}
