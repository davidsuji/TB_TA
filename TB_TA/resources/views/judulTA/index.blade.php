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
        
        <tbody>
          @foreach($JudulTA as $JudulTA)
          <tr>            
            
            <td><p align="center"><font size = 5>{{Auth::user()->name}} ({{$JudulTA['NIM']}})</font></p></td>
            <td><p align="center"><font size = 5>{{$JudulTA['JudulTA']}}</font></p></td>
            <td><p align="center"><font size = 5>{{$JudulTA['NIP']}}</font></p></td>
          </tr>
        @endforeach

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