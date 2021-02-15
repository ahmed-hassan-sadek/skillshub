<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Setting;
use App\Models\Message;
use Illuminate\Support\Facades\validator;
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
        $Validator = Validator::make($request->all() , [
            'name' => 'required | string | max:255',
            'email' => 'required | email | max:255',
            'subject' => 'nullable | string | max:255',
            'body' => 'required | string',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect( url('contact') )->withErrors($errors);
        }

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->body
        ]);
        $request->session()->flash('success' , 'message was send');
        return back($request);
    }
}
