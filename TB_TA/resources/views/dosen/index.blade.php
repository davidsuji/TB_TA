@extends('layouts.app')
@section('sidebar')

@section('content')
@section('title','Daftar Tugas Akhir')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
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
        <li class="active">Daftar TA</li>
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
            <th><p align="center">NIP</p></th>
            <th><p align="center">Nama Dosen</p></th>
            <th><p align="center">Jurusan</p></th>
            <th><p align="center">Bidang Keahlian</p></th>
            <th><p align="center">Nomer HP</p></th>
            <th></th>

            <th colspan="2"></th>
          </tr>
          </thead>
        <tbody>
          @foreach($Dosen as $Dosen)
          <tr>
            <td></td>
            <td><p align="center">{{$Dosen['NIP']}}</p></td>
            <td><p align="center">{{$Dosen['Nama_Dosen']}}</p></td>
            <td><p align="center">{{$Dosen['Jurusan']}}</p></td>
            <td><p align="center">{{$Dosen['Bidang_Keahlian']}}</p></td>
            <td><p align="center">{{$Dosen['No_Hp']}}</p></td>
            <td></td>

            <td><a href="{{action('DosenController@edit', $Dosen['id'])}}" class="btn btn-warning">Ubah</a></td>
            <td>

              <form action="{{action('DosenController@destroy', $Dosen['id'])}}" method="post">

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
