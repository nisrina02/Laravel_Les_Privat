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

class Detailles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = DB::table('detailles')
      ->join('murid', 'murid.id', '=', 'detailles.id_murid')
      ->join('guru', 'guru.id', '=', 'detailles.id_guru')
      ->join('mapel', 'mapel.id', '=', 'detailles.id_mapel')
      ->select('detailles.id', 'detailles.id_murid', 'murid.nama_murid', 'detailles.id_guru', 'guru.nama_guru',
               'detailles.id_mapel', 'mapel.nama_mapel')
      ->get();
      return view('les', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('les_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'id_murid' => 'required',
        'id_guru' => 'required',
        'id_mapel' => 'required',
        'jadwal' => 'required',
      ]);

      $data = new Detailles2();
      $data->id_murid = $request->id_murid;
      $data->id_guru = $request->id_guru;
      $data->id_mapel = $request->id_mapel;
      $data->jadwal = $request->jadwal;
      $data->save();

      return redirect()->route('detailles.index')->with('alert_message', 'Berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Detailles2::where('id', $id)->first();
      if($data != null){
        $data->delete();

        return redirect()->route('detailles.index')->with('alert_message', 'Berhasil menghapus data!');
      }
      return redirect()->route('detailles.index')->with('alert_message', 'ID salah!');
    }
}
