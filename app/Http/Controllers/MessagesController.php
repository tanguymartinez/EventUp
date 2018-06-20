<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests\MessageRequest;


class MessagesController extends Controller
{
    public function submit(MessageRequest $request){
    //  $message = new Message;
      //  $message->name = $request->input('name');
      //  $message->email = $request->input('email');
      //  $message->msg = $request->input('message');
      //  $message->save();

        return redirect('/home');
    }
}
