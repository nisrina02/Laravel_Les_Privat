<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru2;
use Validator;
use Session;

class Guru extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
      $this->middleware('cek_login');
    }

    public function index()
    {
      $data = Guru2::all();
      return view('Guru2', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru_create');
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
        'nama_guru' => 'required',
        'telp' => 'required',
        'alamat' => 'required',
        'email' => 'required',
        'password' => 'required',
        'hak_akses' => 'required',
      ]);

      $data = new Guru2();
      $data->nama_guru = $request->nama_guru;
      $data->telp = $request->telp;
      $data->alamat = $request->alamat;
      $data->email = $request->email;
      $data->password = md5($request->password);
      $data->hak_akses = $request->hak_akses;
      $data->save();

      return redirect('/login3')->with('alert_pesan', 'berhasil menambah data');
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
      $data = Guru2::where('id', $id)->get();
      return view('guru_edit', compact('data'));
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
        'nama_guru' => 'required',
        'telp' => 'required',
        'alamat' => 'required',
        'email' => 'required',
        'password' => 'required',
        'hak_akses' => 'required',
      ]);

      $data = Guru2::where('id', $id)->first();
      $data->nama_guru = $request->nama_guru;
      $data->telp = $request->telp;
      $data->alamat = $request->alamat;
      $data->email = $request->email;
      $data->password = md5($request->password);
      $data->hak_akses = $request->hak_akses;
      $data->save();

      return redirect()->route('guru.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Guru2::where('id', $id)->first();
      if($data != null){
        $data->delete();

        return redirect()->route('guru.index')->with('alert_message', 'Berhasil menghapus data!');
      }
      return redirect()->route('guru.index')->with('alert_message', 'ID salah!');
    }
}
