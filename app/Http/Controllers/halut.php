<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halut extends Controller
{
    public function index(){
      return view('interface');
    }
}
