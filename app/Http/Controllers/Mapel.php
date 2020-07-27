<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel2;
use Validator;
use Session;

class Mapel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Mapel2::all();
      return view('mapel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel_create');
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
        'nama_mapel' => 'required',
      ]);

      $data = new Mapel2();
      $data->nama_mapel = $request->nama_mapel;
      $data->save();

      return redirect()->route('mapel.index')->with('alert_message', 'Berhasil menambahkan data!');
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
      $data = Mapel2::where('id', $id)->get();
      return view('mapel_edit', compact('data'));
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
      $this->validate($request, [
        'nama_mapel' => 'required',
      ]);

      $data = Mapel2::where('id', $id)->first();
      $data->nama_mapel = $request->nama_mapel;
      $data->save();

      return redirect()->route('mapel.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Mapel2::where('id', $id)->first();
      if($data != null){
        $data->delete();

        return redirect()->route('mapel.index')->with('alert_message', 'Berhasil menghapus data!');
      }
      return redirect()->route('mapel.index')->with('alert_message', 'ID salah!');
    }
}
