<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $lang = $request->input('lang'); // Ensure this matches the form input name
        if (in_array($lang, ['en', 'ru', 'uz'])) {
            Session::put('locale', $lang);
            App::setLocale($lang);
        }
        return redirect()->back();
    }
}
