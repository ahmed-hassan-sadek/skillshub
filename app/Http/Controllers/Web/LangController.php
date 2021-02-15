<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function set($lang , Request $request)
    {
        $acceptedLanguage = ['en' , 'ar'];
        if(! in_array($lang , $acceptedLanguage))
        {
            $lang = "en";
        }
        $request->session()->put('lang' , $lang);

        return back(); 
    }
}
