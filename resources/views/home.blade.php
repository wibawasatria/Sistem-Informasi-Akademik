@extends('main.sidebar')
@section('konten')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title text-primary"><i class="fa fa-globe"></i> Sistem Informasi Akademik</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">{{Auth::user()->name}}</span>
                    <span>Visitors Over Time</span>
                  </p>
                 </div>
                 </div>
              </div>
            </div>

        <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title text-primary"><i class="fa fa-user"></i> Informasi Pengguna</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span>Masuk sebagai : </span>
                    <span class="text-bold text-lg"><i class="fa fa-user"></i> {{Auth::user()->name}}</span>
                    
                  </p>
                 </div>
                 </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><i class="fa fa-graduation-cap"></i> {{@$jumlah_guru}}</h3>
                <p>Tenaga Pendidik</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><i class="fa fa-users"></i> {{@$jumlah_siswa}}<sup style="font-size: 20px"></sup></h3>
                <p>Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <style>
            .small-box a{
              color: white;
            }
          </style>
          <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
              <div class="inner text-white">
                <h3><i class="fa fa-users"></i> {{@$jumlah_kelas}}</h3>
                <p>Kelas</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer text-white" style="color: white;">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><i class="fa fa-cog"></i> {{@$jumlah_jurusan}}</h3>
                <p>Jurusan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      </section>
    </div>
@endsection
