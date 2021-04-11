<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstateType extends Model
{
    public function Estate(){
        return $this->hasMany('App\Models\Estate');
    }
}
