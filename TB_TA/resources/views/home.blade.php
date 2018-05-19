@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <font size=6>
                        <font face ="WingDings">
                        Welcome To Website "Tugas Akhir"
                        </font>
                    </font>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Lihat Persyaratan Pendaftaran TA</button>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Pendaftaran TA</button>
                </div>

                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
