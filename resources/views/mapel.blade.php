@extends('main.sidebar')
@section('konten')
<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-12" style="border-radius: 5px;">
               <ol class="breadcrumb float-sm-left">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Siswa</a></li>
                  <li class="breadcrumb-item active"> {{$title}} </li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
         <div class="col-md-12">
         <div class="card card card-primary card-outline">
            <div class="card-header main">
               <h3 class="card-title">
                  <a href="{{url('/mata-pelajaran/add')}}" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-plus-circle"></i> Tambah</a>
                  <a href="" class="btn btn-primary bg-gradient-primary btn-sm pull-right"><i class="fa fa-trash"></i> Recovery</a>
               </h3>
            </div>
            <div class="card-body">
               <table id="example1" class="table table-bordered table-hover table-sm">
                  <thead>
                     <tr>
                        <th class="text-center">No</th>
                        <th>Mata Pelajaran</th>
                        <th>Jenis Mata Pelajaran</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php $no =1; ?>
                  @foreach($mapel as $row)
                     <tr>
                        <td class="text-center">{{$no++}}</td>
                        <td>{{$row->nama_mapel}}</td>
                        <td>{{$row->jenis_mapel}}</td>                     
                        <td class="text-center">
                           <a href="{{url('mata-pelajaran/edit/'.$row->mata_pelajaran_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                           <a href="{{url('mata-pelajaran/delete/'.$row->mata_pelajaran_id)}}" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                     </tr>
                  </tbody>
                  @endforeach
               </table>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection
