<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function settings() {
      $user = User::get();
      return view('usersettings',['user' => $user]);
    }
}
