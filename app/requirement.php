<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requirement extends Model
{
    
    protected $fillable = [
        'os','ram','processor','graphics','network',
    ];



    
    public function product(){
        return $this->belongsto('App\product');
    }
}
