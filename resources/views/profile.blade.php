@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Perbaharui profile sekolah</a></li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-edit"></i> {{$title}}</h3>
              </div>
              @foreach($profile as $row)
                <form role="form" action="{{url('pengaturan/profile/update/'.$row->id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Nama Sekolah</label>
                        <input required type="text" name="nama_sekolah" class="form-control"  value="{{$row->nama_sekolah}}">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input required type="text" name="alamat" class="form-control"  value="{{$row->alamat}}">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Telepon</label>
                        <input required type="text" name="telepon" class="form-control"  value="{{$row->telepon}}">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">E-Mail</label>
                        <input required type="text" name="email" class="form-control"  value="{{$row->email}}">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Fax</label>
                        <input required type="text" name="fax" class="form-control"  value="{{$row->fax}}">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Status</label>
                        <input required type="text" name="status" class="form-control"  value="{{$row->status}}">
                     </div>
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Akreditasi</label>
                        <input required type="text" name="akreditasi" class="form-control"  value="{{$row->akreditasi}}">
                     </div>
                     @endforeach()
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
