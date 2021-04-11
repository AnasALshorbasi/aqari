<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    public function City(){
        return $this->belongsTo('App\Models\City');
    }

    public function EstateType(){
        return $this->belongsTo('App\Models\EstateType');
    }

    public function EstateStatus(){
        return $this->belongsTo('App\Models\EstateStatus');
    }

    public function UserInfo(){
        return $this->belongsTo('App\Models\UserInfo');
    }

    public function Contact(){
        return $this->hasMany('App\Models\Contact');
    }

    public function Transaction(){
        return $this->hasMany('App\Models\Transaction');
    }


}
