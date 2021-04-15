<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tahunajaran;

class DataTahunajaran extends Controller
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
        $title = "Data Tahun Ajaran";
        $tahun_ajaran = Tahunajaran::orderBy('tahun_ajaran_id','DESC')->get();
        return view('tahunajaran', compact('title','tahun_ajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Tahun Ajaran";
        return view('tahunajaranadd',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Tahunajaran();
        $data->tahun_ajaran = $request->tahun_ajaran;
        $data->save();
        return redirect('tahun-ajaran')->with('alert-success','Berhasil menambah data tahun ajaran');
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
        $title = "Perbaharui Data Tahun Ajaran";
        $tahun_ajaran = Tahunajaran::find($id);
        return view('tahunajaranedit',compact('title','tahun_ajaran'));
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
        $data = Tahunajaran::find($id);
        $data->tahun_ajaran = $request->tahun_ajaran;
        $data->save();
        return redirect('tahun-ajaran')->with('alert-success','Berhasil memperbaharui data tahun ajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tahunajaran::find($id)->delete();
        return redirect('tahun-ajaran')->with('alert-success','Berhasil menghapus data tahun ajaran');
    }
}
