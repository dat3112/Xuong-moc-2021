<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function parent(){
        return $this->belongsTo("App\Category","parent_id");
    }
}
