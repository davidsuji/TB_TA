@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <font size=6>
                        <font face ="arial-Black">

                        </font>
                    </font>
                </div>

                <h2>SYRAT PENDAFTARAN TUGAS AKHIR</h2>

                <br>
                <p>Setiap Mahasiswa Universitas Muhammadiyah Malang bisa mengambil tugas akhir dengan persyaratan sebagai berikut:</p>
                <ol>
                  <li> Mahasiswa aktif dan memprogram tugas akhir di KSM pada semester yang sedang berjalan</li>
                  <li> SKS yang diperoleh minimal 110 SKS dengan IPKum. >= 2,6 (Tidak ada nilai D dan E)</li>
                  <li> Telah menempuh MK Metode Penilitian dan PKN</li>
                  <li> Membayar biaya Tugas Akhir </li>
                </ol>
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
