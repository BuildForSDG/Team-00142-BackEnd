<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photos extends Model
{

    protected $guarded = ['id'];

    // ! this function is used to set the ne to many relationship with the photos  model.
    public function photos()
    {
        return $this->belongsTo('App\photos', 'projectId', 'id');
    }
}
