<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeOfAssistance extends Model
{

    protected $guarded = ['id'];

    public function projectAsistance()
    {
        return $this->hasMany('App\projectDetails', 'typeOfAssistanceRequiredId', 'id');
    }
}
