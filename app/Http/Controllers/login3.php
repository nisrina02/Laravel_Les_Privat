<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru2;
use Validator;
use Session;

class login3 extends Controller
{
  public function index(){
    return view('login3');
  }

  public function cek(Request $req){
    $this->validate($req,[
      'email'=>'required',
      'password'=>'required'
    ]);
    $proses=Guru2::where('email',$req->email)->where('password', md5($req->password))->first();
    if($proses){
      Session::put('id', $proses->id);
      Session::put('email', $proses->email);
      Session::put('password', $proses->password);
      Session::put('nama', $proses->nama);
      Session::put('login_status', true);
      return redirect('/dashguru');
    } else {
      Session::flash('alert_pesan', 'Username dan Password tidak cocok');
      return redirect('login3');
    }
  }
  public function logout(){
    Session::flush();
    return redirect('/interface');
  }
}
