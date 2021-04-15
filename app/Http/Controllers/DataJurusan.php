<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class DataJurusan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $title = "Data Jurusan";
        $jurusan = Jurusan::all();
        return view('jurusan',compact('title','jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Jurusan";
        return view('jurusanadd',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => "Form ini tidak boleh kosong"
        ];

        $this->validate($request,[
            'singkatan' => 'required',
            'nama_jurusan' => 'required'
        ], $messages);

        $jurusan = new Jurusan();
        $jurusan->singkatan = $request->singkatan;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->save();
        return redirect('/jurusan')->with('alert-success','Data jurusan telah ditambahkan');
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
        $title = "Perbaharui data jurusan";
        $jurusan = Jurusan::find($id);
        return view('jurusanedit', compact('title','jurusan'));
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
        $jurusan = Jurusan::find($id);
        $jurusan->singkatan = $request->singkatan;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->save();
        return redirect('jurusan')->with('alert-success','Data jurusan berhasil diperbaharui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jurusan::find($id)->delete();
        return redirect('jurusan')->with('alert-success','Berhasil menghapus data jurusan');
    }
}
