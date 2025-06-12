<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Daftarcontroller extends Controller
{
    public function register()
    {
        return view('page.pendaftaran');
    }
}
