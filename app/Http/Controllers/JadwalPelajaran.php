<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jadwal_pelajaran;
use App\Tahunajaran;
use App\Kelas;
use App\Mata_pelajaran;
use App\Guru;
use App\Hari;

class JadwalPelajaran extends Controller
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
        $title = "Jadwal Pelajaran";
        $kelas = Kelas::where('status',true)->get();
        $mata_pelajaran = Mata_pelajaran::all();
        $guru = Guru::all();
        $hari = Hari::all();
        $tahun_ajaran = Tahunajaran::all();
        $jadwal_pelajaran = Jadwal_pelajaran::orderBy('hari_id','ASC')->get();
        return view('jadwalpel',compact('title','jadwal_pelajaran','tahun_ajaran','hari','guru','mata_pelajaran','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $title = "Buat Jadwal Pelajaran";
    //     $kelas = Kelas::where('status',true)->get();
    //     $mata_pelajaran = Mata_pelajaran::all();
    //     $guru = Guru::all();
    //     $hari = Hari::all();
    //     $tahun_ajaran = Tahunajaran::all();
        
    //     return view('jadwalpeladd',compact('title','jadwal_pelajaran','tahun_ajaran','hari','guru','mata_pelajaran','kelas'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Jadwal_pelajaran;
        $data->kelas_id = $request->kelas;
        $data->tahun_ajaran_id = $request->tahun_ajaran;
        $data->mata_pelajaran_id = $request->mata_pelajaran;
        $data->guru_id = $request->guru;
        $data->hari_id = $request->hari;
        $data->jam_mulai = $request->mulai;
        $data->jam_selesai = $request->selesai;
        $data->save();
        return redirect('jadwal-pelajaran')->with('alert-success','Berhasil menyimpan jadwal pelajaran');
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
        $japel = Jadwal_pelajaran::find($id)->first();
        $title = "Perbaharui Jadwal Pelajaran";
        return view('jadwalpeledit',compact('title', 'japel'));
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
        $data = Jadwal_pelajaran::find($id)->first();
        $data->kelas_id = $request->kelas_id;
        $data->mata_pelajran_id = $request->mapel_id;
        $data->guru_id = $request->guru_id;
        $data->hari_id = $request->hari_id;
        $data->save();
        return redirect('jadwal-pelajaran')->with('alert-success','Berhasil menyimpan jadwal pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jadwal_pelajaran::find($id)->delete();
        return redirect('jadwal-pelajaran')->with('alert-success','Berhasil menghapus jadwal pelajaran');

    }

    function generateDay(){
        $hari = ['Senin','Selasa','Rabu','Kami','Jumat','Sabtu','Minggu'];
        $data = new Hari();
        foreach($hari as $key){
            $data->hari = $key;
            $data->save();
        }
        

    }
}
