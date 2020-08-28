<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Outfits;

class OutfitsController extends Controller
{
    public function index(){
        return Outfits::all();
    }

    public function store(Request $request){
        $this->validate($request,[
            'tops'=>"required",
            'bottoms'=>"required",
            'shoes'=>"required",
            'name=>"required,max:10'
        ]);

        $outfit = new Outfits;

        $outfit->tops_id = $request->tops;
        $outfit->bottoms_id = $request->bottoms;
        $outfit->shoes_id = $request->shoes;
        $outfit->item_name = $request->name;

        $outfit->save();

        return redirect("/");
    }
}
