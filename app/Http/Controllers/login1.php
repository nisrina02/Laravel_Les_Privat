<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin2;
use Validator;
use Session;

class login1 extends Controller
{
  public function index(){
    return view('login1');
  }

  public function cek(Request $req){
    $this->validate($req,[
      'email'=>'required',
      'password'=>'required'
    ]);
    $proses=Admin2::where('email',$req->email)->where('password', md5($req->password))->first();
    if($proses){
      Session::put('id', $proses->id);
      Session::put('email', $proses->email);
      Session::put('password', $proses->password);
      Session::put('nama', $proses->nama);
      Session::put('hak_akses', $proses->hak_akses);
      Session::put('login_status', true);
      return redirect('/dash');
    } else {
      Session::flash('alert_pesan', 'Username dan Password tidak cocok');
      return redirect('login1');
    }
  }
  public function logout(){
    Session::flush();
    return redirect('interface');
  }
}
