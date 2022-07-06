<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Adduser extends Controller
{
    public function addUser(Request $request ){
       $validated= $request->validate([
            'name'    =>'required',
            'surname' =>'required',
            'email'   =>'required|email|unique:users,email'
        ]);

       DB::table('users')->insert([
        'name'  =>$request->input('name'),
        'surname'  =>$request->input('surname'),
        'email'  =>$request->input('email'),
       ]); 
       return redirect()->route('users');
       return back()->withErrors('');
    }
}
