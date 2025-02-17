<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PutriController;
use App\Http\Controllers\DashbordController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PutriController::class, 'index']);
Route::get('/dashbord',[DashbordController::class, 'index']);
    
