<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Jurusan;
use App\Tahunajaran;

class DataKelas extends Controller
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
        $title = "Data Kelas";
        $kelas = Kelas::Where('status',1)->orderBy('tahun_ajaran_id')->orderBy('nama_kelas','asc')->get();
        return view('kelas', compact('title','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Kelas";
        $jurusan = Jurusan::all();
        $tahun_ajaran = Tahunajaran::all();
        return view('kelasadd',compact('title','jurusan','tahun_ajaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelas = new Kelas();
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->jurusan_id = $request->id_jurusan;
        $kelas->tahun_ajaran_id = $request->tahun;
        $kelas->status = $request->status;
        $kelas->save();
        return redirect('kelas')->with('alert-success','Data Kelas berhasil ditambahkan');
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
        $title = "Perbaharui Data Kelas";
        $kelas = Kelas::find($id);
        $jurusan = Jurusan::all();
        $tahun_ajaran = Tahunajaran::orderBy('tahun_ajaran_id','DESC')->get();
        return view('kelasedit', compact('title','kelas','jurusan','tahun_ajaran'));
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
        $kelas = Kelas::find($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->jurusan_id = $request->id_jurusan;
        $kelas->tahun_ajaran_id = $request->tahun;
        $kelas->status = $request->status;
        $kelas->save();
        return redirect('kelas')->with('alert-success', 'Data kelas berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::find($id)->delete();
        return redirect('kelas')->with('alert-success','Berhasil menghapus data kelas');
    }
}
