@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Jadwal Pelajran</a></li>
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
                  <div class="card-header main">
                     <h3 class="card-title">
                        <i clas="far fa-calendar"></i> Jadwal Pelajaran
                     </h3>
                  </div>
                  <div class="card-body">
                     <div class="row">
                     <div class="col-md-3">
                        <form action="{{url('jadwal-pelajaran/save/')}}" method="POST">
                        @csrf
                        <div class="form-group col-md">
                              <label>Hari</label>
                              <select name="hari" class="form-control">
                                 <option>Pilih Hari</option>
                                 @foreach($hari as $row)
                                 <option value="{{$row->hari_id}}">{{$row->hari}}</option>
                                 @endforeach
                              </select>
                        </div>
                        <div class="form-group col-md">
                              <label>Tahun Ajaran</label>
                              <select name="tahun_ajaran" class="form-control">
                                 <option>Pilih Tahun Ajaran</option>
                                 @foreach($tahun_ajaran as $ta)
                                 <option value="{{$ta->tahun_ajaran_id}}">{{$ta->tahun_ajaran}}</option>
                                 @endforeach
                              </select>
                        </div>
                        <div class="form-group col-md">
                              <label for="exampleInputPassword1">Kelas</label>
                              <select name="kelas" class="form-control">
                                 <option>Pilih Kelas</option>
                                 @foreach($kelas as $row)
                                 <option value="{{$row->kelas_id}}">{{$row->nama_kelas}}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="form-group col-md">
                              <label for="exampleInputPassword1">Guru</label>
                              <select name="guru" class="form-control">
                                 <option>Pilih Guru</option>
                                 @foreach($guru as $row)
                                 <option value="{{$row->guru_id}}">{{$row->nama_lengkap}}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="form-group col-md">
                              <label for="exampleInputPassword1">Mata Pelajaran</label>
                              <select name="mata_pelajaran" class="form-control">
                                 <option>Pilih Mata Pelajaran</option>
                                 @foreach($mata_pelajaran as $row)
                                 <option value="{{$row->mata_pelajaran_id}}">{{$row->nama_mapel}}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="form-group col-md">
                              <label for="">Jam Mulai</label>
                              <div class="input-group date" id="timepicker" data-target-input="nearest">
                                 <input name="mulai" type="time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                                 <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group col-md">
                              <label for="">Jam Selesai</label>
                              <div class="input-group date" id="timepicker" data-target-input="nearest">
                                 <input name="selesai" type="time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                                 <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group col-md">
                           <button type="submit" class="btn btn-primary btn-xs"><i class="fas fa-check"></i> Simpan</button>
                           </div>
                           </form>
                        </div>
                        <div class="col-md-9">
                           <div class="row">
                           <div class="form-group col-md-3">
                           <label>Tahun Ajaran</label>
                              <div class="input-group">
                              <select name="kelas" class="form-control">
                                 <option value="Normatif">Pilih Kelas</option>
                                 @foreach($kelas as $row)
                                 <option value="Produktif">{{$row->nama_kelas}}</option>
                                 @endforeach
                              </select>                           
                              </div>
                           </div>
                           
                           <div class="form-group col-md-3">
                           <label>Pilih Kelas</label>
                              <div class="input-group">
                              <select name="kelas" class="form-control">
                                 <option value="Normatif">Pilih Kelas</option>
                                 @foreach($kelas as $row)
                                 <option value="Produktif">{{$row->nama_kelas}}</option>
                                 @endforeach
                              </select>                           <div class="input-group-append">
                                    <button class="input-group-text btn-primary">
                                       <span class="fas fa-search"></span>
                                    </button>
                                 </div>
                              </div>
                           </div>
                           </div>
                           <table id="example2" class="table table-bordered table-striped table-sm">
                              <thead>
                              <tr>
                                 <th>Hari</th>
                                 <th>Kelas</th>
                                 <th>Nama Pelajaran</th>
                                 <th>Nama Guru</th>
                                 <th>Jam Mulai</th>
                                 <th>Jam Selesai</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $no = 1; ?>
                              @foreach($jadwal_pelajaran as $row)
                                 <tr>
                                    <td>{{@$row->hari->hari}}</td>
                                    <td>{{@$row->kelas->nama_kelas}}</td>
                                    <td>{{@$row->mata_pelajaran->nama_mapel}}</td>
                                    <td>{{@$row->guru->nama_lengkap}}</td>
                                    <td>{{$row->jam_mulai}}</td>
                                    <td>{{$row->jam_selesai}}</td>
                                    <td><a href="" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"></i></a></td>
                                 </tr>
                              @endforeach
                              </tfoot>
                           </table>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
