<?php

namespace App\Http\Controllers;
use App\Msg;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' =>'required',
            'email' => 'required|email',
            'subject' =>'required',
            'message' =>'required',

        ]);
        $msg = new Msg();
        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->subject = $request->subject;
        $msg->message = $request->message;
        $msg->save();
        Toastr::success('Message successfully send  :)','Success');
        return redirect()->route('home');
    }
}
