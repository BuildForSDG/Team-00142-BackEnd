<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectProposer extends Model
{

    protected $guarded = ['id'];

    public function projectsProposed()
    {
        return $this->hasMany('App\ProjectDetails', 'projectProposerId', 'id');
    }
}
