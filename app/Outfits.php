<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Tops;

use App\Bottoms;

use App\Shoes;

class Outfits extends Model
{
    public function tops(){
        return $this->hasone('Tops','id', 'tops_id');
    }

    public function bottoms(){
        return $this->hasOne('Bottoms','id', 'bottoms_id');
    }

    public function shoes(){
        return $this->hasOne('shoes', 'id' ,'shoes_id');
    }
}
