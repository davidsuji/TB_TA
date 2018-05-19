@extends('layouts.app')
@section('sidebar')

@section('content')
@section('title','Input Data')
  <!-- Content Wrapper. Contains page content -->

    <section class="content-header">
      <h1>
        Input Data
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Input Data</li>
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
          @endif
          @if (\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div><br/>
        @endif
        </div>

            <form method="post" action="{{url('dosen')}}" enctype = "multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="NIP">NIP</label>
                  <input type="text" class="form-control" id="NIP" placeholder="NIP" name="NIP">
                </div>

                <div class="form-group">
                  <label for="Nama">Nama Dosen</label>
                  <input type="text" class="form-control" id="Nama_Dosen"placeholder="Nama_Dosen" name="Nama_Dosen">
                </div>

                <div class="form-group">
                  <label for="Jurusan">Jurusan</label>
                  <input type="text" class="form-control" id="Jurusan" placeholder="Jurusan Dosen" name="Jurusan">
                </div>

                 <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="Bidang_Keahlian" id="Bidang_Keahlian" value="Game">Game
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="Bidang_Keahlian" id="Bidang_Keahlian" value="Kecerdasan Buatan">AI
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
                      <input type="radio" name="Bidang_Keahlian" id="Bidang_Keahlian" value="Design Web">Design Web
                    </label>
                  </div>
                </div>


                <div class="form-group">
                  <label for="No_Hp">Nomer HP</label>
                  <input type="text" class="form-control" id="No_Hp" placeholder="Nomer HP" name="No_Hp">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
              </div>

            </form>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

  @endsection
