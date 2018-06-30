<?php

namespace CatchAbook;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public function User()
    {
        return $this->belongsTo('CatchAbook\User');
    }
}
