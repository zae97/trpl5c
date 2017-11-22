@extends('user.layouts')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="list-group table-of-contents">
          <a class="list-group-item" href="/user_home">Home</a>
          <!-- <a class="list-group-item" href="needleman.php">Needleman</a>
          <a class="list-group-item" href="example2.php">Affinegap</a>
          <a class="list-group-item" href="jaccard.php">Jaccard</a> -->
          <a class="list-group-item" href="{{route('soalpelamar.index')}}">Soal</a>
          <a class="list-group-item" href="">Hasil</a>
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
                    Maaf Anda Belum terverifikasi. Harap tunggu atau hubungi admin.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
