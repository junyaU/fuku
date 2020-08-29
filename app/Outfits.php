<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outfits extends Model
{
    public function tops(){
        return $this->hasone('App\Tops','id', 'tops_id');
    }

    public function bottoms(){
        return $this->hasOne('App\Bottoms','id', 'bottoms_id');
    }

    public function shoes(){
        return $this->hasOne('App\Shoes', 'id' ,'shoes_id');
    }
}
