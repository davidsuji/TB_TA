@extends('layouts.app')
@section('sidebar')

@section('content')
@section('title','Dafrtar Judul')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIM TA | Dafrtar Judul</title>
  
    <section class="content-header">
      <h1>
        Daftar
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Judul TA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Tugas Akhir</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
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
        
            <form method="post" action="{{url('judulTa')}}" enctype = "multipart/form-data">
              
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="NIM">NIM</label>
                  <input type="text" class="form-control" id="NIM" name="NIM" value="{{ Auth::user()->username }}">
                </div>

                <div class="form-group">
                  <label for="Nama_Mahasiswa">Nama Mahasiswa</label>
                  <input type="text" class="form-control" id="Nama_Mahasiswa" name="Nama_Mahasiswa" value="{{ Auth::user()->name }}">
                </div>

                 <div class="form-group">
                  <label for="JudulTA">Judul TA</label>
                  <input type="text" class="form-control" id="JudulTA" placeholder="Judul Ta" name="JudulTA" >                
                </div>

                <div class="form-group">
                  <label for="Alamat">Dosen pembimbing</label>
                  <select class="form-control" id="NIP" name="NIP">
                    <option>-----------</option>
                    @foreach($Dosen as $Dosen)
                    <option value="{{$Dosen['NIP']}}">{{$Dosen['Nama_Dosen']}}</option>
                    @endforeach
                  </select>

                </div>

                 

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