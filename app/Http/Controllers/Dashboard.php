<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Siswa;
use App\Guru;
use App\Jurusan;
use App\Kelas;
use App\Kalender_akademik;

class Dashboard extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $users = Auth::user();
        $title = "Dashboard";
        $jumlah_siswa = Siswa::join('kelas','kelas.kelas_id', '=', 'siswa.kelas_id')->where('kelas.status',true)->count();
        $jumlah_guru = Guru::count();
        $jumlah_kelas = Kelas::where('status', true)->count();
        $jumlah_jurusan = Jurusan::all()->count();
        return view('home', compact(
                                    'title',
                                    'jumlah_siswa',
                                    'jumlah_guru',
                                    'jumlah_kelas',
                                    'jumlah_jurusan',
                                    'users'
                                    ));
    }
}
