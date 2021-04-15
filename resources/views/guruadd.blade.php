@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Data Guru</a></li>
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
                <h3 class="card-title"><i class="fas fa-graduation-cap"></i> {{$title}}</h3>
              </div>
              <form role="form" action="{{url('guru/store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="card-body row">
                  <div class="col-md-8">
                     <div class="row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NIK</label>
                        <input required type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="Nomor Induk Kewarganegaraan">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NIP</label>
                        <input required type="text" name="nip" class="form-control" id="exampleInputEmail1" placeholder="Nomor Induk Pegawai">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input required type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input required type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Telepon</label>
                        <input required type="text" name="telepon" class="form-control" id="exampleInputEmail1" placeholder="Telepon">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input required type="text" name="tempat_lahir" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input required type="date" name="tanggal_lahir" class="form-control" id="exampleInputEmail1" placeholder="Telepon">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Jenjang Pendidikan</label>
                        <select name="jp_id" class="form-control">
                           <option>Pilih Jenjang Pendidikan</option>
                           @foreach($jenjang_pendidikan as $row)
                           <option value="{{$row->jp_id}}">{{$row->jenjang_pendidikan_detail}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Agama</label>
                        <select name="agama" class="form-control">
                           <option>Pilih Agama</option>
                           <option value="Islam">Islam</option>
                           <option value="Hindu">Hindu</option>
                           <option value="Budha">Budha</option>
                           <option value="Kristen">Kristen</option>
                           <option value="Katolik">Katolik</option>
                        </select>
                     </div>
                     <div class="form-group col-md-3">
                        <label for="exampleInputPassword1">Status</label><br>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" checked type="radio" name="status" value="aktif" id="customRadio2" name="customRadio">
                          <label for="customRadio2" class="custom-control-label">Aktif</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="status" value="nonaktif" id="customRadio1" name="customRadio">
                          <label for="customRadio1" class="custom-control-label">Tidak Aktif</label>
                        </div>
                     </div>
                     <div class="form-group col-md-3">
                        <label for="exampleInputPassword1">Jenis Kelamin</label><br>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="jk" value="Laki-laki" id="jkl" name="customRadio">
                          <label for="jkl" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="jk" value="Perempuan" id="jkp" name="customRadio">
                          <label for="jkp" class="custom-control-label">Perempuan</label>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <label>FOTO PROFILE</label>
                  <div class="card card-primary card-outline">
              <div class="card-body box-profile">
              
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="../../dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <div class="form-group" style="margin-top: 10px;">
                    
                    <div class="custom-file">
                      <input type="file" name="images" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
                  </div>
                  </div>
                <div class="card-footer">
                  <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('guru/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
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
