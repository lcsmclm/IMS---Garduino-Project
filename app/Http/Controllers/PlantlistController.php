<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plantlist;

class PlantlistController extends Controller
{
    public function index() {
    $plants = Plantlist::all();
    return view('plantlist',['plants' => $plants]);
}

public function show($id) {
    $plants = Plantlist::find($id);
    return view('plantlist_details',['plant' => $plants]);
}
public function search($q){
  $plants = Plantlist::where('plantlist_name', 'like', '%' . $q . '%')->get();
if(strlen($q) == 1){
  $plants = Plantlist::all();
}
return view('plantlist_search',['plants' => $plants]);


}
}
