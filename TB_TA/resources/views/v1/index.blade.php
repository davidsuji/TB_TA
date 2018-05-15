@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
</head>
<body>
    <section class="content-header">
      <h1>
        Daftar Tugas Akhir
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Tugas Akhir</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">

         <div>
          @if (\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div><br/>
        @endif
        </div>
        <table class="table table-striped">
          <thead>
          <tr>
            <th></th>
            <th><p align="center">NIM</p></th>
            <th><p align="center">Nama</p></th>
            <th><p align="center">Jenis Kelamin</p></th>
            <th><p align="center">Jurusan</p></th>
            <th><p align="center">Judul TA</p></th>
            <th><p align="center">Dosen Pembimbing</p></th>

            <th colspan="2"></th>
          </tr>
          </thead>
        <tbody>
          @foreach($TugasAkhir as $TugasAkhir)
          <tr>
            <td><img src="../../../gambar/{{$TugasAkhir['Gambar']}}" height="70" width="60"> </td>
            <td><p align="center">{{$TugasAkhir['NIM']}}</p></td>
            <td><p align="center">{{$TugasAkhir['Nama_Mahasiswa']}}</p></td>
            <td><p align="center">{{$TugasAkhir['Jenis_Kelamin']}}</p></td>
            <td><p align="center">{{$TugasAkhir['Jurusan']}}</p></td>
            <td><p align="center">{{$TugasAkhir['Judul_TA']}}</p></td>
            <td><p align="center">{{$TugasAkhir['Dosen_Pembimbing']}}</p></td>
            
            <td><a href="{{action('TugasAkhirController@edit', $TugasAkhir['id'])}}" class="btn btn-warning">Ubah</a></td>
            <td>

              <form action="{{action('TugasAkhirController@destroy', $TugasAkhir['id'])}}" method="post">

                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">        
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->

  
</body>
</html>
@endsection