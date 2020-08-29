<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Outfits;
class OutfitsController extends Controller
{
    public function index(){
        $outfits = Outfits::all();
        $item_list = [];
        foreach($outfits as $value){
            $tops = $value->tops;
            $bottoms = $value->bottoms;
            $shoes = $value->shoes;

            array_push($item_list, array('item_name'=>$value['item_name'] , 'tops'=>$tops , 'bottoms'=>$bottoms , 'shoes'=>$shoes));
        }

        return $item_list;
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
