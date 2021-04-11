<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function UserInfo(){
        return $this->belongsTo('App\Models\UserInfo');
    }


    public function Estate(){
        return $this->belongsTo('App\Models\Estate');
    }

    public function TransactionType(){
        return $this->belongsTo('App\Models\TransactionType');
    }
}
