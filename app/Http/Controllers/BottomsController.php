<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bottoms;

use Storage;

class BottomsController extends Controller
{
    public function index(){
        return Bottoms::all();
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:15',
            'image' => 'file|image|mimes:png,jpeg'
        ]);
        $bottoms = new Bottoms;

        $bottoms->name = $request->name;

        $image = $request->file('image');
        $path = Storage::disk("s3")->putfile('mybottoms' , $image , 'public');

        $bottoms->image = Storage::disk('s3')->url($path);
        $bottoms->save();

        return redirect('/add');
    }
}
