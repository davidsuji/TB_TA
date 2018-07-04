@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <font size=6>
                        <font face ="arial-Black">
                        Welcome To Website "Tugas Akhir"
                        </font>
                    </font>
                </div>

                <h2>SYRAT PENDAFTARAN TUGAS AKHIR</h2>

                <ul>
                  <li>1. Telah melakukan registrasi ulang</li>
                  <li>2. Jumlah sks dari semester 1 s.d. 5 minimal 60 sks</li>
                  <li>3. Kartu kendali telah ditanda tangani dosen pembimbing</li>
                  <li>4. Laporan Ujian Tugas Akhir 3 Jilid/Eksemplar </li>

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
