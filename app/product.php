<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function Product_images(){
        return $this->hasMany('App\Product_images');
    }
}
