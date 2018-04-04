<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
