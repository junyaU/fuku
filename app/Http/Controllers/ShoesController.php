<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shoes;

use Storage;

class ShoesController extends Controller
{
    public function index(){
        return Shoes::all();
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:15',
            'image' => 'file|image|mimes:png,jpeg'
        ]);

        $shoes = new shoes;

        $shoes->name = $request->name;

        $image = $request->file('image');
        $path = Storage::disk(config("filesystems.cloud"))->putfile('myshoes' , $image , 'public');

        $shoes->image = Storage::disk(config("fylesystems.cloud"))->url($path);
        $shoes->save();

        return redirect('/add');

    }
}
