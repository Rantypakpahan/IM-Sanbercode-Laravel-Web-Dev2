<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form()
    {
        return view('page.register');
    }

    public function welcome(Request $request)
    {
        $firstname = $request->input('firstname');

        return view('page.welcome', ["firstname" => $firstname]);

    }
}
