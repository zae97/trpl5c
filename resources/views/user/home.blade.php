@extends('user.layouts')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="list-group table-of-contents">
          <a class="list-group-item" href="">Home</a>
          <!-- <a class="list-group-item" href="needleman.php">Needleman</a>
          <a class="list-group-item" href="example2.php">Affinegap</a>
          <a class="list-group-item" href="jaccard.php">Jaccard</a> -->
          <a class="list-group-item" href="/tests">Soal</a>
          <a class="list-group-item" href="{{route('hasil.index')}}">Hasil</a>
          <a class="list-group-item" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
                   href="{{ route('logout') }}">
                   Logout
          </a>

          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <!-- <a class="list-group-item" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
                   href="{{ route('logout') }}">
                   Logout
          </a> -->
        </div>
      </div>
        <div class="col-lg-9 col-md-3 col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">Pelamar Dashboard</div>

                <div class="panel-body">
                    Selamat datang di tes penerimaan pegawai baru Kantor Pos
                      <br></br>
                    Test Online :
                      <br></br>
                    1. Akan dilaksanakan pada xx xx xxxxx
                    2. Soal akan terbuka ketika akun anda telah di Verifikasi oleh admin , jika pada tanggal pelaksanaan Test soal belum terbuka , silahkan hubungi admin .
                    3. Pengerjaan soal diberi waktu 10 Menit dengan total soal 30 .
                    4. Soal hanya dapat dikerjakan 1 kali .
                      <br></br>
                    Wawancara :
                      <br></br>
                    1. Wawancara akan dilaksanakan pada tanggan xx xx xxx bertempat di xxxxxx
                    2. Silahkan membawa bukti pendaftaran 
                    3. Pada saat wawancara pelamar diwajibkan menggunakan kemeja putih dan bawahan hitam kain serta bersepatu .
                    Pengumuman :
                    1. Hasil test penerimaan pegawai akan diumuman secara online pada tanggal xx xx xxxx
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
