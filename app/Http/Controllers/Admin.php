<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin2;
use Validator;
use Session;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Admin2::all();
        return view('admin2', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_create');
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
        'nama' => 'required',
        'email' => 'required',
        'password' => 'required',
      ]);

      $data = new Admin2();
      $data->nama = $request->nama;
      $data->email = $request->email;
      $data->password = md5($request->password);
      $data->save();

      return redirect('/login1')->with('alert_pesan', 'berhasil menambah data');
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
      $data = Admin2::where('id', $id)->get();
      return view('admin_edit', compact('data'));
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
        'nama' => 'required',
        'email' => 'required',
        'password' => 'required',
      ]);

      $data = Admin2::where('id', $id)->first();
      $data->nama = $request->nama;
      $data->email = $request->email;
      $data->password = md5($request->password);
      $data->save();

      return redirect()->route('Admin.index')->with('alert_message', 'Berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Admin2::where('id', $id)->first();
      if($data != null){
        $data->delete();

        return redirect()->route('admin.index')->with('alert_message', 'Berhasil menghapus data!');
      }
      return redirect()->route('admin.index')->with('alert_message', 'ID salah!');
    }
}
