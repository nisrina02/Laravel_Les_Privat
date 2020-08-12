<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid2;
use Validator;
use Session;

class login2 extends Controller
{
  public function index(){
    return view('login2');
  }

  public function cek(Request $req){
    $this->validate($req,[
      'email'=>'required',
      'password'=>'required'
    ]);
    $proses=Murid2::where('email',$req->email)->where('password', md5($req->password))->first();
    if($proses){
      Session::put('id', $proses->id);
      Session::put('email', $proses->email);
      Session::put('password', $proses->password);
      Session::put('nama_murid', $proses->nama_murid);
      Session::put('alamat', $proses->alamat);
      Session::put('telp', $proses->telp);
      Session::put('hak_akses', $proses->hak_akses);
      Session::put('login_status1', true);
      return redirect('/dashmurid');
    } else {
      Session::flash('alert_pesan', 'Username dan Password tidak cocok');
      return redirect('login2');
    }
  }
  public function logout(){
    Session::flush();
    return redirect('/interface');
  }
}
