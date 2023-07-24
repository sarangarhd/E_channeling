<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

class User extends Controller
{
    //
    public function Appointment(Request $request){
     
       $data=new Admin;
       $data->Doctor_name=$request->Name;
       $data->Date=$request->date;
       $data->Time=$request->time;
       $data->save();
       
    }
}
