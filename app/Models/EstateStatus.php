<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstateStatus extends Model
{
    public function Estate(){
        return $this->hasMany('App\Models\Estate');
    }
}
