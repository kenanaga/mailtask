<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Mail;
use Illuminate\Support\Facades\Mail;
use App\Models\user;
class MailController extends Controller
{
    public function send($id){
        $data['id']=$id;
        return view('sendmail',$data);
    }

    public function sendmail(Request $request){
        $id=$request->input('id');
        $user= User::findOrFail($id);
        $email= $user->email;
        $text=$request->input('text');
        $array=[
            'name'=>$user->name,
            'surname'=>$user->surname,
            'text'=>$text
        ];
        mail::send('mailfront',$array,function ($message) use ($email){
            $message->subject('mail');
            $message->to($email);
        });

        return redirect()->route('users');
    }
}
