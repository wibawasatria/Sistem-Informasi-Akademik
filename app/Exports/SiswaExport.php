<?php

namespace App\Exports;

use App\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Http\Request;

class SiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(Request $request)
    {
        return Siswa::join('kelas','kelas.kelas_id','=','siswa.kelas_id')
                    ->where('kelas.status',1)
                    ->where('siswa.kelas_id', $request->kelas_id)
                    ->select('nama_siswa','jk','nama_kelas','alamat')
                    ->get();
    }
}
