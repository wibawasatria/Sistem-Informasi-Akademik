<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Guru;
use App\Jenjang_pendidikan;

class DataGuru extends Controller
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
        $title = "Data Guru";
        $guru = Guru::where('deleted','N')->get();
        return view('guru', compact('title','guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data Guru";
        $jenjang_pendidikan = Jenjang_pendidikan::all();
        return view('guruadd', compact('title','guru','jenjang_pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Guru();
        $data->nik = $request->nik;
            $data->nip = $request->nip;
            $data->nama_lengkap = $request->nama_lengkap;
            $data->alamat = $request->alamat;
            $data->telepon = $request->telepon;
            $data->jp_id = $request->jp_id;
            $data->foto = "some files";
            $data->status = $request->status;
            $data->deleted = 'N';
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->agama = $request->agama;
            $data->jk_guru = $request->jk;
            $data->username = $request->nik;
            $data->password = bcrypt($request->nik);
            $data->save();
            return redirect('guru')->with('alert-success','Berhasil menambah data guru');
            // if($request->hasFile('images')){
            //     $file = $request->file('images');
    
            //     // Mendapatkan Nama File
            //     $nama_file = $file->getClientOriginalName();
            
            //     // Mendapatkan Extension File
            //     $extension = $file->getClientOriginalExtension();
            
            //     // Mendapatkan Ukuran File
            //     $ukuran_file = $file->getSize();
            
            //     // Proses Upload File
            //     $destinationPath = 'uploads';
            //     $file->move($destinationPath,$file->getClientOriginalName());

            //     $data->nik = $request->nik;
            //     $data->nip = $request->nip;
            //     $data->nama_lengkap = $request->nama_lengkap;
            //     $data->alamat = $request->alamat;
            //     $data->telepon = $request->telepon;
            //     $data->jp_id = $request->jp_id;
            //     $data->foto = $nama_file;
            //     $data->save();
                
            //     // 
            // }else{
            //     echo "Gagal upload gambar";
            // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Guru::leftJoin('jenjang_pendidikan','jenjang_pendidikan.jp_id','=','guru.jp_id')->find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Perbaharui Data Guru";
        $guru = Guru::find($id);
        $jenjang_pendidikan = Jenjang_pendidikan::all();
        return view('guruedit', compact('title','guru','jenjang_pendidikan'));
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
        $data = Guru::find($id);
        $data->nik = $request->nik;
        $data->nip = $request->nip;
        $data->nama_lengkap = $request->nama_lengkap;
        $data->alamat = $request->alamat;
        $data->telepon = $request->telepon;
        $data->jp_id = $request->jp_id;
        $data->foto = "some files";
        $data->status = $request->status;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->agama = $request->agama;
        $data->jk_guru = $request->jk;
        // $data->username = $request->nik;
        // $data->password = bcrypt($request->nik);
        $data->save();
        return redirect('guru')->with('alert-success','Berhasil memperbaharui data guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function soft_destroy($id)
    {
        $data = Guru::find($id);
        $data->deleted = "Y";
        $data->save();
        return redirect('guru')->with('alert-success','Data Guru berhasil di hapus');
    }

    public function restore()
    {
        $data = Guru::find($id);
        $data->deleted = "N";
        $data->save();
        return redirect('guru')->with('alert-success','Data Guru berhasil di kembalikan');
    }

    public function recovery()
    {
        $title = "Data Guru Terhapus";
        $guru = Guru::where('deleted','Y')->get();
        return view('guru', compact('title','guru'));
    }

    public function destroy($id)
    {
        // Hapus file
        $gambar = Guru::where('guru_id',$id)->first();
        Storage::disk('public')->delete('uploads/'.$gambar->foto);

        Guru::find($id)->delete();
        return redirect('guru')->with('alert-success','Berhasil menghapus data guru');
    }
}
