<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
class ControllerHome extends Controller
{
    public function home(){
        return view('home');
    }
}
