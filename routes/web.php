<?php

Auth::routes();
Route::get('/', 'Login@index')->name('login');
Route::get('/login', 'LoginController@index')->name('login');
Route::get('logout','Login@logout');
Route::get('/dashboard','Dashboard@index');

//Auth
Auth::routes();

//Dashboard
Route::get('/home', 'HomeController@index')->name('home');

//Jurusan
Route::get('/jurusan','DataJurusan@index');
Route::get('/jurusan/add','DataJurusan@create');
Route::post('/jurusan/store','DataJurusan@store');
Route::get('/jurusan/edit/{id}','DataJurusan@edit');
Route::put('/jurusan/update/{id}','DataJurusan@update');
Route::get('/jurusan/delete/{id}','DataJurusan@destroy');

//Kelas 
Route::get('/kelas','DataKelas@index');
Route::get('/kelas/add','DataKelas@create');
Route::post('/kelas/store','DataKelas@store');
Route::get('/kelas/edit/{id}','DataKelas@edit');
Route::put('/kelas/update/{id}','DataKelas@update');
Route::get('/kelas/delete/{id}', 'DataKelas@destroy');

//Siswa
Route::get('/siswa', 'DataSiswa@index');
Route::get('/siswa/add', 'DataSiswa@create');
Route::post('/siswa/store', 'DataSiswa@store');
Route::get('/siswa/update/{id}','DataSiswa@edit');
Route::put('/siswa/update/{id}', 'DataSiswa@update');
Route::get('/siswa/delete/{id}', 'DataSiswa@destroy');
Route::post('/siswa/export/','DataSiswa@export_data');

//Jenjang Pendidikan
Route::get('jenjang-pendidikan', 'Jenjangpendidikan@index');
Route::get('jenjang-pendidikan/add', 'Jenjangpendidikan@create');
Route::post('jenjang-pendidikan/store', 'Jenjangpendidikan@store');
Route::get('jenjang-pendidikan/edit/{id}', 'Jenjangpendidikan@edit');
Route::put('jenjang-pendidikan/update/{id}', 'Jenjangpendidikan@update');
Route::get('jenjang-pendidikan/delete/{id}', 'Jenjangpendidikan@destroy');

//Data Guru
Route::get('guru','DataGuru@index');
Route::get('guru/add','DataGuru@create');
Route::post('guru/store','DataGuru@store');
Route::get('guru/edit/{id}','DataGuru@edit');
Route::put('guru/update/{id}','DataGuru@update');
Route::get('guru/trash/{id}','DataGuru@soft_destroy');
Route::get('guru/recovery/','DataGuru@recovery');
Route::get('guru/restore/{id}','DataGuru@un_destroy');
Route::get('guru/delete/{id}','DataGuru@destroy');
Route::get('guru/detail/{id}','DataGuru@show');

//Walikelas
Route::get('wali-kelas','DataWalikelas@index');
Route::get('wali-kelas/add','DataWalikelas@create');
Route::post('wali-kelas/store','DataWalikelas@store');
Route::get('wali-kelas/edit/{id}','DataWalikelas@edit');
Route::put('wali-kelas/update/{id}','DataWalikelas@update');
Route::get('wali-kelas/delete/{id}','DataWalikelas@destroy');

//Tahun Ajaran
Route::get('tahun-ajaran','DataTahunajaran@index');
Route::get('tahun-ajaran/add','DataTahunajaran@create');
Route::post('tahun-ajaran/store','DataTahunajaran@store');
Route::get('tahun-ajaran/edit/{id}','DataTahunajaran@edit');
Route::put('tahun-ajaran/update/{id}','DataTahunajaran@update');
Route::get('tahun-ajaran/delete/{id}','DataTahunajaran@destroy');

//Kalender Akademik
Route::get('kalender-akademik','KalenderAkademik@index');
Route::get('kalender-akademik/add','KalenderAkademik@create');
Route::post('kalender-akademik/save','KalenderAkademik@store');
Route::get('kalender-akademik/edit/{id}','KalenderAkademik@edit');
Route::put('kalender-akademik/update/{id}', 'KalenderAkademik@update');
Route::get('kalender-akademik/delete{id}', 'KalenderAkademik@destroy');


//Mata Pelajaran
Route::get('mata-pelajaran','DataPelajaran@index');
Route::get('mata-pelajaran/add','DataPelajaran@create');
Route::post('mata-pelajaran/save','DataPelajaran@store');
Route::get('mata-pelajaran/edit/{id}','DataPelajaran@edit');
Route::put('mata-pelajaran/update/{id}','DataPelajaran@update');
Route::get('mata-pelajaran/delete/{id}','DataPelajaran@destroy');

//Jadwal Pelajaran
Route::get('jadwal-pelajaran','JadwalPelajaran@index');
Route::get('jadwal-pelajaran/add','JadwalPelajaran@create');
Route::post('jadwal-pelajaran/save','JadwalPelajaran@store');
Route::get('jadwal-pelajaran/edit/{id}','JadwalPelajaran@edit');
Route::put('jadwal-pelajaran/update/{id}','JadwalPelajaran@update');
Route::get('jadwal-pelajaran/delete/{id}','JadwalPelajaran@destroy');

//Pengaturan
Route::get('pengaturan','Setting@index');
Route::get('pengaturan/profile','Setting@edit');
Route::put('pengaturan/profile/update/{id}','Setting@update');
Route::get('pengaturan/siswa-update-data/{id}','Setting@siswa_lihat_data');

Route::get('gen','JadwalPelajaran@generateDay');

