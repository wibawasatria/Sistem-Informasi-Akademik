@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Akademik</a></li>
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
                <form role="form" action="{{url('tahun-ajaran/store')}}" method="post">
                  {{csrf_field()}}
                  <div class="card-body row">
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Tahun Ajaran</label>
                        <input required type="text" name="tahun_ajaran" class="form-control" id="exampleInputEmail1" placeholder="Misal : 2019/2020">
                     </div>
                  </div>
                    <div class="card-footer">
                    <button class="btn btn-danger btn-sm bg-gradient-danger" onclick="location(href:'blabla')"><i class="fa fa-chevron-circle-left"></i> Kembali</button>
                    <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                    </div>
                </form>
            </div>
            </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
