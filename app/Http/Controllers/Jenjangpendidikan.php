<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenjang_pendidikan;

class Jenjangpendidikan extends Controller
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
        $title = "Jenjang Pendidikan";
        $jenjang_pendidikan = Jenjang_pendidikan::all();
        return view('jenjang_pendidikan', compact('title','jenjang_pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Jenjang Pendidikan";
        return view('jenjang_pendidikanadd',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Jenjang_pendidikan();
        $data->jenjang_pendidikan = $request->jp;
        $data->jenjang_pendidikan_detail = $request->jpd;
        $data->save();
        return redirect('jenjang-pendidikan')->with('alert-success','Berhasil menambah data jenjang pendidikan');
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
        $title = "Perbaharui Jenjang Pendidikan";
        $jenjang_pendidikan = Jenjang_pendidikan::find($id);
        return view('jenjang_pendidikanedit', compact('title','jenjang_pendidikan'));

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
        $data = Jenjang_pendidikan::find($id);
        $data->jenjang_pendidikan = $request->jp;
        $data->jenjang_pendidikan_detail = $request->jpd;
        $data->save();
        return redirect('jenjang-pendidikan')->with('alert-success','Berhasil memperbaharui data jenjang pendidikan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jenjang_pendidikan::find($id)->delete();
        return redirect('jenjang-pendidikan')->with('alert-success','Berhasil memperbaharui data jenjang pendidikan');
    }
}
