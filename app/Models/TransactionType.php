<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{

    public function Transaction(){
        return $this->hasMany('App\Models\Transaction');
    }

}
