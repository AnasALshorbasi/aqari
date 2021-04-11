<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function Estate(){
        return $this->hasMany('App\Models\Estate');
    }

    public function Contact(){
        return $this->hasMany('App\Models\Contact');
    }

    public function Transaction(){
        return $this->hasMany('App\Models\Transaction');
    }
}
