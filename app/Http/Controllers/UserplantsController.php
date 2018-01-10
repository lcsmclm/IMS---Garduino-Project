<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Userplants;

class UserplantsController extends Controller
{
    //
    public function index() {
    $usrplants = Userplants::where('user_id', '=', '0')->get();
    return view('userplants',['usrplants' => $usrplants]);
  }
  public function show($id) {
      $usrplants = Userplants::find($id);
      return view('userplants_details',['usrplants' => $usrplants]);
  }
  public function statistics(){
    $usrplants = Userplants::where('user_id', '=', '0')->get();
    return view('statistics',['usrplants' => $usrplants]);
  }
  public function statdetails($id){
    $usrplant = Userplants::find($id);
    return view('statistics_details',['usrplant' => $usrplant]);
  }
}
