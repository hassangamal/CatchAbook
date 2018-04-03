<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class book extends Model
{
    //
    public $table='books';
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
