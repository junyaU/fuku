<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Total_photos;

use Storage;

class Total_photosController extends Controller
{
    public function index(){
        return Total_photos::all();
    }

    public function store(Request $request){
        $total_photo = new Total_photos;
    }
}
