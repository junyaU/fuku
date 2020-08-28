<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bottoms extends Model
{
    public function outfits(){
        return $this->belongsTo("App\Outfits" , "shoes_id");
    }
}
