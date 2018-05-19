@extends('layouts.app')
@section('sidebar')

@section('content')
@section('title','Edit Data')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  
    <section class="content-header">
      <h1>
        Edit Data
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Edit Data</li>
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
                  <input type="text" class="form-control" id="NIM" placeholder="NIM" name="NIM" value="{{$TugasAkhir->NIM}}">
                </div>

                <div class="form-group">
                  <label for="Nama_Mahasiswa">Nama Mahasiswa</label>
                  <input type="text" class="form-control" id="Nama_Mahasiswa"placeholder="Nama Mahasiswa" name="Nama_Mahasiswa" value="{{$TugasAkhir->Nama_Mahasiswa}}">
                </div>

                 <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="Jenis_Kelamin" id="Jenis_Kelamin" value="Laki - Laki">Laki - Laki
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Jenis_Kelamin" id="Jenis_Kelamin" value="Perempuan">Perempuan                      
                    </label>
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <input type="text" class="form-control" id="Alamat"placeholder="Alamat Tempat Tinggal" name="Alamat" value="{{$TugasAkhir->Alamat}}">
                </div>

                <div class="form-group">
                  <label for="Jurusan">Jurusan</label>
                  <input type="text" class="form-control" id="Jurusan"placeholder="Nama Jurusan" name="Jurusan" value="{{$TugasAkhir->Jurusan}}">
                </div>

                <div class="form-group">
                  <label for="Judul_TA">Judul Tugas Akhir</label>
                  <input type="text" class="form-control" id="Judul_TA"placeholder="Judul Tugas Akhir" name="Judul_TA" value="{{$TugasAkhir->Judul_TA}}">
                </div>
                
                <div class="form-group">
                  <label for="Dosen_Pembimbing">Dosen Pembimbing</label>
                  <input type="text" class="form-control" id="Dosen_Pembimbing"placeholder="Nama Dosen Pembimbing" name="Dosen_Pembimbing" value="{{$TugasAkhir->Dosen_Pembimbing}}">
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