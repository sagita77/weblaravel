<?php

namespace App\Http\Controllers;

use App\Models\PutriModel;
use Illuminate\Http\Request;

class PutriController extends Controller
{
    public function index()  {
        return view('welcome');
    //    $putri = PutriModel::all();
    //    return view('PutriView', compact('putri'));
    }
    
}
