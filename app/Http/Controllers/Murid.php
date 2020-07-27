<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid2;
use Validator;
use Session;

class Murid extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Murid2::all();
      return view('murid2', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('murid_create');
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
        'nama_murid' => 'required',
        'telp' => 'required',
        'alamat' => 'required',
        'email' => 'required',
        'password' => 'required',
      ]);

      $data = new Murid2();
      $data->nama_murid = $request->nama_murid;
      $data->telp = $request->telp;
      $data->alamat = $request->alamat;
      $data->email = $request->email;
      $data->password = md5($request->password);
      $data->save();

      return redirect('/login2')->with('alert_pesan', 'berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = Murid2::where('id', $id)->get();
      return view('murid_edit', compact('data'));
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
        'nama_murid' => 'required',
        'telp' => 'required',
        'alamat' => 'required',
        'email' => 'required',
        'password' => 'required',
      ]);

      $data = Murid2::where('id', $id)->first();
      $data->nama_murid = $request->nama_murid;
      $data->telp = $request->telp;
      $data->alamat = $request->alamat;
      $data->email = $request->email;
      $data->password = md5($request->password);
      $data->save();

      return redirect()->route('murid.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Murid2::where('id', $id)->first();
      if($data != null){
        $data->delete();

        return redirect()->route('murid.index')->with('alert_message', 'Berhasil menghapus data!');
      }
      return redirect()->route('murid.index')->with('alert_message', 'ID salah!');
    }
}
