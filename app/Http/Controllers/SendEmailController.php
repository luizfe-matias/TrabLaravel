<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    function sendEmail(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Mail::to($request->get('email'), $request->get('name'))->send(new SendMail($request));
    }
}
