<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectDemographic extends Model
{

    protected $guarded = ['id'];

    public function projectsDemographic()
    {
        return $this->hasMany('App\ProjectDetails', 'projectDemographicId', 'id');
    }
}
