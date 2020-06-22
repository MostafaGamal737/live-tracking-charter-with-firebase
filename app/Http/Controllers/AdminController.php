<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class AdminController extends Controller
{
    public function show(){
      $users=user::get();

      return view("admin.admin",compact("users"));
    }

    public function Ubdate(Request $data){

      $d=explode(' ',$data->role);
     $user=user::find($d[1]);
     $user->roles=$d[0];
     $user->save();
     return "done";
    }
}
