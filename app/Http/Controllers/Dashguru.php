<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashguru extends Controller
{
    public function index(){
      return view('guru');
    }
}
