@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Tenaga Pendidik</a></li>
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
                     <h3 class="card-title">
                       Input Kalender Akademik
                     </h3>
                  </div>
                  <div class="card-body">
                  <div class="col-md-12">
                  <form action="{{url('kalender-akademik/save')}}" method="post">
                  {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="judul" id="" class="form-control" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <textarea row="10" name="isi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" placeholder="Isi keterangan"></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <input type="date" name="tanggal" id="" class="form-control" placeholder="Judul">
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="/kalender-akademik" class="btn btn-danger"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary bg-gradient-primary"><i class="fa fa-check"></i> Simpan</button>
                    </div>
                </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
