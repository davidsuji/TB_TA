@extends('layouts.app')
@section('sidebar')

@section('content')
@section('title','Edit Tugas Akhir')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  
    <section class="content-header">
      <h1>
        Blank page
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
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
         <div>
            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div><br/>
        </div> 
        @endif
        
            <form method="post" action="{{action('TugasAkhirController@update', $id)}}" enctype = "multipart/form-data">
              @method('PATCH')
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="NIM">NIM</label>
                  <input type="text" class="form-control" id="NIM" placeholder="Enter NIM" name="NIM" value="{{$TugasAkhir->NIM}}">
                </div>
                <div class="form-group">
                  <label for="Nama">Nama</label>
                  <input type="text" class="form-control" id="Nama"placeholder="Enter Name" name="Nama" value="{{$TugasAkhir->Nama}}">
                </div>

                 <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Laki - Laki">Laki - Laki
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Perempuan">Perempuan                      
                    </label>
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="NoHp">NoHp</label>
                  <input type="text" class="form-control" id="NoHp"placeholder="Enter NoHp" name="NoHp" value="{{$TugasAkhir->NoHp}}">
                </div>

                <div class="form-group">
                  <label for="Gambar">File Gambar</label>
                  <input type="file" id="Gambar" name="Gambar" >

                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  
</body>
</html>
@endsection