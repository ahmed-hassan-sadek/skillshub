<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Setting;
use App\Models\Message;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $data['setting'] = Setting::select('email' , 'phone')->first();
        return view('web.contact.contact')->with($data);
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:255',
            'email' => 'required | email | max:255',
            'subject' => 'nullable | string | max:255',
            'body' => 'required | string',
        ]);


        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body
        ]);
        $data = ['success' => 'message was send'];
        return Response::json($data);
    }
}
