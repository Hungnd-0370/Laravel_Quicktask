<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request, $language = 'en')
    {
        $request->session()->put('lang', $language);

        //back to preview page
        return redirect()->back();
    }
}
