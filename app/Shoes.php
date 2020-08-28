<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoes extends Model
{
    public function outfits(){
        return $this->belongsTo("App\Outfits" , "shoes_id");
    }
}
