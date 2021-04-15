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
                        <a href="{{url('/wali-kelas/add')}}" class="btn btn-info bg-gradient-primary bg-gradient-dange btn-sm pull-right"><i class="fa fa-plus-circle"></i> Tambah Wali Kelas</a>
                     </h3>
                  </div>
                  <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover table-striped table-sm">
                     <thead>
                     <tr>
                        <th class="text-center">No</th>
                        <th>Nama Guru</th>
                        <th>Wali Kelas</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($walikelas as $row)
                     <tr>
                        <td>{{$no++}}</td>
                        <td>{{@$row->guru->nama_lengkap}}</td>
                        <td>{{@$row->kelas->nama_kelas}}</td>
                        <td class="text-center">
                           <a href="{{url('wali-kelas/edit/'.$row->walikelas_id)}}" class="btn btn-primary bg-gradient-primary bg-gradient-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                           <a href="{{url('wali-kelas/delete/'.$row->walikelas_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
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
@endsection
