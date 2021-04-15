<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kalender_akademik;
use Illuminate\Support\Facades\Auth;

class KalenderAkademik extends Controller
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
        $title = "Kalender Akademik";
        $kalender = Kalender_akademik::all();
        return view('ka', compact('title','kalender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Buat kalender akademik";
        return view('kaadd', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->name;
        $data = new Kalender_akademik();
        $data->title = $request->judul;
        $data->content = $request->isi;
        $data->tgl = $request->tanggal;
        $data->created_by = $user;
        $data->save();
        return redirect('kalender-akademik')->with('alert-success','Berhasil menyimpan kalender akademik');
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
        $title = "Perbaharui Kalender Akademik";
        $kalender = Kalender_akademik::find($id)->first();
        return view('kaedit', compact('title','kalender'));
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
        $user = Auth::user()->name;
        $data = Kalender_akademik::find($id);
        $data->title = $request->judul;
        $data->content = $request->isi;
        $data->tgl = $request->tanggal;
        $data->created_by = $user;
        $data->save();
        return redirect('kalender-akademik')->with('alert-success','Berhasil menyimpan kalender akademik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
