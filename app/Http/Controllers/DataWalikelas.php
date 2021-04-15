<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walikelas;
use App\Kelas;
use App\Guru;

class DataWalikelas extends Controller
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
        $title = "Data Wali Kelas";
        $walikelas = Walikelas::all();
        return view('walikelas', compact('title','walikelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Wali Kelas";
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('walikelasadd', compact('title','guru','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->kelas_id;
        $kelas = Walikelas::where('kelas_id',$id)->count();
        if($kelas==0){
            $walikelas = new Walikelas();
            $walikelas->kelas_id = $request->kelas_id;
            $walikelas->guru_id  = $request->guru_id;
            $walikelas->save();
            return redirect('wali-kelas')->with('alert-success','Berhasil menambah data wali kelas');

        }else{

            return redirect('wali-kelas')->with('alert-danger','Tidak dapat menambahkan data kelas yang sama, silahkan pilih kelas lain');

        }
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
        $title = "Perbaharui Data Wali Kelas";
        $walikelas = Walikelas::find($id);
        $kelas = Kelas::all();
        $guru = Guru::all();
        return view('walikelasedit', compact('title','walikelas','kelas','guru'));
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
        $walikelas = Walikelas::find($id);
        $walikelas->kelas_id = $request->kelas_id;
        $walikelas->guru_id  = $request->guru_id;
        $walikelas->save();
        return redirect('wali-kelas')->with('alert-success','Berhasil memperbaharui data wali kelas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Walikelas::find($id)->delete();
        return redirect('wali-kelas')->with('alert-success','Berhasil menghapus data wali kelas');
    }
}
