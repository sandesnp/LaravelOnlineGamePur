<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    protected $fillable = ['walletsum'];
    //

    
    public function user(){
        return $this->belongsto('App\User');
    }
}
