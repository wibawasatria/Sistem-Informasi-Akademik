<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mata_pelajaran;

class DataPelajaran extends Controller
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
        $title = "Mata Pelajaran";
        $mapel = Mata_pelajaran::all();
        return view('mapel',compact('title','mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Mata Pelajaran";
        return view('mapeladd',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Mata_pelajaran();
        $data->kode_mapel = $request->kode_mapel;
        $data->nama_mapel = $request->nama_mapel;
        $data->jenis_mapel = $request->jenis_mapel;
        $data->save();
        return redirect('mata-pelajaran')->with('alert-success','Berhasil menyimpan data mata pelajaran');
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
        $title = "Perbaharui data mata pelajaran";
        $mapel = Mata_pelajaran::find($id);
        return view('mapeledit', compact('title','mapel'));
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
        $data = Mata_pelajaran::find($id);
        $data->kode_mapel = $request->kode_mapel;
        $data->nama_mapel = $request->nama_mapel;
        $data->jenis_mapel = $request->jenis_mapel;
        $data->save();
        return redirect('mata-pelajaran')->with('alert-success','Berhasil memperbaharui data mata pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mata_pelajaran::find($id)->delete();
        return redirect('mata-pelajaran')->with('alert-success','Berhasil menghapus data mata pelajaran');
    }
}
