<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnauthController extends Controller
{
    
    public function welcome()
    {
        return view('welcome');
    }

}
