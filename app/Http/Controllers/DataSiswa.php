<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestSiswa;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Siswa;
use App\Kelas;

class DataSiswa extends Controller
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
        $title = "Data Siswa";
        $kelas = Kelas::all();
        $siswa = Siswa::join('kelas','kelas.kelas_id','=','siswa.kelas_id')->where('kelas.status',1)->get();
        $jumlah = Siswa::all()->count();
        return view('siswa', compact('title', 'siswa','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Siswa";
        $kelas = Kelas::all();
        return view('siswaadd',compact('title','kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    

    public function store(Request $request)
    {
        
            $data = new Siswa();
            $data->nis = $request->nis;
            $data->nisn = $request->nisn;
            $data->nama_siswa = $request->nama_siswa;
            $data->alamat = $request->alamat;
            $data->kelas_id = $request->id_kelas;
            $data->jk = $request->jk;
            $data->username = $request->nis;
            $data->password = $request->nis;
            $data->save();
            
            return redirect('/siswa/add')->with('alert-success','Berhasil menyimpan data siswa'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $title = "Perbaharui Data Siswa";
        $siswa = Siswa::find($id);
        $kelas = Kelas::all();
        return view('siswaedit',compact('title','kelas','siswa'));
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
        $siswa = Siswa::find($id);
        $siswa->nis = $request->nis;
        $siswa->nisn = $request->nisn;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->alamat = $request->alamat;
        $siswa->kelas_id = $request->id_kelas;
        // $data->username = $request->nis;
        // $data->password = $request->nis;
        $siswa->save();
        return redirect('/siswa')->with('alert-success','Berhasil memperbaharui data siswa'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::find($id)->delete();
        return redirect('siswa')->with('alert-success','Berhasil menghapus data siswa');
    }

    public function export_data()
    {
        return Excel::download(new SiswaExport, 'Data-Siswa'.time().'.xlsx');
    }
}
