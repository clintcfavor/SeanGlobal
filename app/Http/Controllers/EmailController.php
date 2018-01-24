<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request){
        Log::info($request);

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $bodyMessage = $request->input('message');

        $input = $request->all();

        Mail::send('emails.send', [
            'name' => $name,
            'email' => $email,
            'topic' => $subject,
            'content' => $bodyMessage
        ], function ($m) {
            $m->from('me@gmail.com', 'grphx');

            $m->to('admin@app.com');
        });

        return response()->json(['message' => 'Request completed']);  
    }
}
