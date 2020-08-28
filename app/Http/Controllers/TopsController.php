<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tops;

use Storage;

class TopsController extends Controller
{
    public function index(){
        return Tops::all();
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:15',
            'image' => 'file|image|mimes:png,jpeg'
        ]);
        $tops = new Tops;

        $tops->name = $request->name;

        $image = $request->file('image');
        $path = Storage::disk(config("filesystems.cloud"))->putfile('mytops' , $image , 'public');

        $tops->image = Storage::disk(config("filesystems.cloud"))->url($path);
        $tops->save();

        return redirect('/add');
    }
}
