<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    protected $fillable = [
        'product_name','product_intro','product_price','product_developer','product_price','product_image',
    ];

    public function requirement()
    {
        return $this->hasOne('App\requirement');
    }
    
    public function user()
    {
        return $this->belongsToMany('App\User','purchase')->withPivot('reviewcontent','rating')->withTimeStamps();
    }
}


