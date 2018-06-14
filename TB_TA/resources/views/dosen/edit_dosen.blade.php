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
        
            <form method="post" action="{{action('DosenController@update', $id)}}" enctype = "multipart/form-data">
              @method('PATCH')
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="NIP">NIP</label>
                  <input type="text" class="form-control" id="NIP" placeholder="NIP" name="NIP" value="{{$Dosen->NIP}}">
                </div>

                <div class="form-group">
                  <label for="Nama_Dosen">Nama Dosen</label>
                  <input type="text" class="form-control" id="Nama_Dosen"placeholder="Nama Dosen" name="Nama_Dosen" value="{{$Dosen->Nama_Dosen}}">
                </div>

                <div class="form-group">
                  <label for="Jurusan">Jurusan</label>
                  <input type="text" class="form-control" id="Jurusan"placeholder="Nama Jurusan" name="Jurusan" value="{{$Dosen->Jurusan}}">
                </div>

                 <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="Bidang_Keahlian" id="Bidang_Keahlian" value="Game">Game
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Bidang_Keahlian" id="Bidang_Keahlian" value="Kecerdasan Buatan">Artificial Intelligence
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Bidang_Keahlian" id="Bidang_Keahlian" value="Jaringan">Jaringan                    
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Bidang_Keahlian" id="Bidang_Keahlian" value="RPL">Rekayasa Perangkat Lunak
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Bidang_Keahlian" id="Bidang_Keahlian" value="Desaign Web">Desaign Web
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Bidang_Keahlian" id="Bidang_Keahlian" value="Data Sains">Data Sains
                    </label>
                  </div>                  
                </div>

                <div class="form-group">
                  <label for="No_Hp">No Handphone</label>
                  <input type="text" class="form-control" id="No_Hp"placeholder="Nomor Handphone" name="No_Hp" value="{{$Dosen->No_Hp}}">
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