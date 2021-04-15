@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Jurusan</a></li>
                  <li class="breadcrumb-item active">{{$title}} </li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
           
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-plus-circle"></i> {{$title}}</h3>
              </div>
              <form role="form" action="{{url('mata-pelajaran/update/'.$mapel->mata_pelajaran_id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-2">
                        <label for="exampleInputEmail1">Kode</label>
                        <input value="{{$mapel->kode_mapel}}" required type="text" name="kode_mapel" class="form-control" id="exampleInputEmail1" placeholder="Kode">
                     </div>
                     <div class="form-group col-md-5">
                        <label for="exampleInputEmail1">Mata Pelajaran</label>
                        <input value="{{$mapel->nama_mapel}}" required type="text" name="nama_mapel" class="form-control" id="exampleInputEmail1" placeholder="Nama Pelajaran">
                     </div>
                     <div class="form-group col-md-5">
                        <label for="exampleInputPassword1">Pilih Jenis Pelajaran</label>
                        <select name="jenis_mapel" class="form-control">
                            <option selected value="{{$mapel->jenis_mapel}}">{{$mapel->jenis_mapel}}</option>
                            <option value="Normatif">Normatif</option>
                            <option value="Adaptif">Adaptif</option>
                            <option value="Produktif">Produktif</option>
                        </select>
                     </div>
                  </div>
                <div class="card-footer">
                  <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('kelas/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
