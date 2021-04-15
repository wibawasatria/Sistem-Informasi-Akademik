@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Siswa</a></li>
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
                        <a href="{{url('/siswa/add')}}" class="btn btn-info bg-gradient-primary btn-sm pull-right"><i class="fa fa-plus-circle"></i> Tambah Siswa</a>
                        <a href="#" class="btn btn-info bg-gradient-primary btn-sm pull-right" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-download"></i> Export</a>
                        <a href="" class="btn btn-info bg-gradient-primary btn-sm pull-right"><i class="fa fa-upload"></i> Import</a>
                        <a href="{{url('/guru/recovery/')}}" class="btn btn-info bg-gradient-primary btn-sm pull-right"><i class="fa fa-trash"></i> Data Terhapus</a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped table-sm">
                     <thead>
                     <tr>
                        <th class="text-center">No</th>
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>JK</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($siswa as $row)
                     <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td>{{$row->nisn}}</td>
                        <td>{{$row->nis}}</td>
                        <td>{{$row->nama_siswa}}</td>
                        <td>{{@$row->kelas->nama_kelas}}</td>
                        <td width="50" class="text-center">{{$row->jk}}</td>
                        <td width="160" class="text-center">
                           <a href="{{url('siswa/update/'.$row->siswa_id)}}" class="btn btn-primary bg-gradient-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                           <a href="{{url('siswa/delete/'.$row->siswa_id)}}" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"></i> Hapus</a>
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
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <div class="modal-title"><i class="far fa-file-excel"></i> Export Data</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
         <form action="{{url('siswa/export/')}}" method="post">
         @csrf
            <div class="form-group">
               <select name="kelas_id" id="" class="form-control">
                  @foreach($kelas as $row)
                  <option value="{{$row->kelas_id}}">{{$row->nama_kelas}}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-download"></i> Download</button>            
            </div>  
         </div>
         </form>
      </div>
   </div>
</div>
@endsection
