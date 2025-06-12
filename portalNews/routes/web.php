<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Daftarcontroller;

Route::get('/', [Homecontroller::class, 'home']);
Route::get('/pendaftaran', [Daftarcontroller::class, 'register']);
