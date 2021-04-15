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
                <h3 class="card-title">{{$title}}</h3>
              </div>
              <form role="form" action="{{url('jurusan/update/'.$jurusan->jurusan_id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Kode Jurusan</label>
                        <input  value="{{$jurusan->singkatan}}" required type="text" name="singkatan" class="form-control" id="exampleInputEmail1" placeholder="Contoh : TKJ">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Nama Jurusan</label>
                        <input value="{{$jurusan->nama_jurusan}}" style="text-transform: capitalize;" required type="text" name="nama_jurusan" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Jurusan">
                     </div>
                  </div>
                <div class="card-footer">
                  <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('jurusan/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
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
