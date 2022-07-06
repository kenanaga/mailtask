<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    public function Users(){
        $data['userdata']=user::all();
        return view('users',$data);
       
    }
}
