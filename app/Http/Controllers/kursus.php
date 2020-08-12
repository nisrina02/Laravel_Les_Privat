<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid2;
use App\Guru2;
use App\Mapel2;
use App\Detailles2;
use Validator;
use Session;
use DB;

class kursus extends Controller
{
    public function index(){
      $data = DB::table('detailles')
      ->join('murid', 'murid.id', '=', 'detailles.id_murid')
      ->join('guru', 'guru.id', '=', 'detailles.id_guru')
      ->join('mapel', 'mapel.id', '=', 'detailles.id_mapel')
      ->where('detailles.id_murid', '=', 'murid.id')
      ->select('detailles.id', 'murid.nama_murid', 'guru.nama_guru', 'mapel.nama_mapel',
              'detailles.jadwal')
      ->get();
      return view('kursus', compact('data'));
    }
}
