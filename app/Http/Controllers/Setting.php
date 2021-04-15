<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;

class Setting extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Pengaturan";
        $setting = Settings::all();
        return view('settings',compact('title','setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $title = "Perbaharui profile sekolah";
        $profile = Settings::get();
        return view('profile',compact('title','profile'));
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
        $data = Settings::find($id);
        $data->nama_sekolah = $request->nama_sekolah;
        $data->alamat = $request->alamat;
        $data->telepon = $request->telepon;
        $data->email = $request->email;
        $data->fax = $request->fax;
        $data->status = $request->status;
        $data->akreditasi = $request->akreditasi;
        $data->save();
        return redirect('pengaturan/profile')->with('alert-success','Berhasil memperbaharui profile sekolah');
    }

    function siswa_lihat_data($id)
    {
        $data = Settings::find($id)->first();
        if($data->siswa_update_data==true){
            $data->siswa_update_data = false;
            $data->save();
            return redirect('pengaturan')->with('alert-success','Berhasil di nonaktifkan');
        }else if($data->siswa_update_data == false){
            $data->siswa_update_data = true;
            $data->save();
            return redirect('pengaturan')->with('alert-success','Berhasil di aktifkan');
        }
        
    }
}
