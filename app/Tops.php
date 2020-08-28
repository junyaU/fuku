<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tops extends Model
{
    public function outfit(){
        return $this->belongsTo('App\Outfits' ,'tops_id');
    }
}
