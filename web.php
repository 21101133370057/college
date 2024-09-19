<?php

use App\Http\Controllers\InformationsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin/information/create',[InformationsController::class,'create']);
