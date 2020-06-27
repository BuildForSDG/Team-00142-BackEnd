<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeOfProject extends Model
{
    protected $guarded = ['id'];

    public function hasManyTypesOfProjects()
    {
        return $this->hasMany('App\ProjectDetails', 'foreign_key', 'local_key');
    }
}
