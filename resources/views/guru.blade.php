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
                  <div class="card-header main">
                     <h3 class="card-title">
                        <a href="{{url('/guru/add')}}" class="btn btn-info bg-gradient-primary btn-sm pull-right"><i class="fa fa-plus-circle"></i> Input Data</a>
                        <a href="" class="btn btn-info bg-gradient-primary btn-sm pull-right"><i class="fa fa-download"></i> Export Data</a>
                        <a href="" class="btn btn-info bg-gradient-primary btn-sm pull-right"><i class="fa fa-upload"></i> Import Data</a>
                        <a href="{{url('/guru/recovery/')}}" class="btn btn-info bg-gradient-primary btn-sm pull-right"><i class="fa fa-trash"></i> Terhapus</a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-hover table-bordered table-striped table-sm">
                     <thead>
                     <tr>
                        <th class="text-center">No</th>
                        <th>NUPTK</th>
                        <th>Nama Lengkap</th>
                        <th>Jenjang Pendidikan</th>
                        <th>Status</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody id="data-guru">
                     <?php $no = 1; ?>
                     @foreach($guru as $row)
                        <tr>
                           <td>{{$no++}}</td>
                           <td>   
                              {{$row->nip}}
                           </td>
                            <td>{{$row->nama_lengkap}}</td>
                            <td>{{@$row->jenjang_pendidikan->jenjang_pendidikan_detail}}</td>
                            <td class="text-center">
                              @if($row->status=="aktif")
                              <span class="badge badge-primary" style="text-transform:uppercase;">{{$row->status}}</span>
                              @else
                              <span class="badge badge-danger" style="text-transform:uppercase;">N / A</span>
                              @endif
                           </td>
                            <td class="text-center">
                                 <a href="{{url('guru/edit/'.$row->guru_id)}}" class="btn btn-success btn-xs bg-gradient-success detail-guru" data-id="{{$row->guru_id}}" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-eye"></i> Detail</a>
                                 <a href="{{url('guru/edit/'.$row->guru_id)}}" class="btn btn-primary bg-gradient-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
                                 <a href="{{url('guru/trash/'.$row->guru_id)}}" class="btn btn-danger btn-xs bg-gradient-danger hapus"><i class="fa fa-trash"></i> Hapus</a>
                            </td> 
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

<div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
            <div class="col-md">
                      <div class="">
                        <div class="card-body box-profile">
                           <div class="text-center">
                           <img src="http://127.0.0.1:8000/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                           </div>
                           <h3 class="profile-username text-center"></h3>
                           <p class="text-muted text-center" id="nama_guru"></p>
                           <ul class="list-group list-group-unbordered mb-3">
                              <li class="list-group-item">NIK<a class="float-right" id="nik"></a></li>
                              <li class="list-group-item">NUPTK<a class="float-right" id="nuptk"></a></li>
                              <li class="list-group-item">Alamat<a class="float-right" id="alamat"></a></li>
                              <li class="list-group-item">Tempat, Tanggal Lahir<a class="float-right" id="ttl"></a></li>
                              <li class="list-group-item">Jenis Kelamin<a class="float-right" id="jk"></a></li>
                              <li class="list-group-item">Agama<a class="float-right" id="agama"></a></li>
                              <li class="list-group-item">Jenjang Pendidikan<a class="float-right" id="jenjang_pendidikan"></a></li>
                              <li class="list-group-item">Jurusan<a class="float-right" id="jurusan"></a></li>

                           </ul>
                        </div>
                     </div>
                  </div>
               
            </div>
          </div>
        </div>
      </div>
@endsection
