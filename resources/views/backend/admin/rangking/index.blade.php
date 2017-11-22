@extends('layouts.master')

@section('content')
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1>Perangkingan</h1>
          <img class="img-responsive center-block" style="width: 100px; height: auto; margin-bottom: 20px;" src="image/lug.png" alt=""/>
        </div>
      </div>
      <div class="row jumbotron">

        <div class="col-md-12" style="max-height: 1030px; overflow-y:scroll;">
          <!-- <center>          <h2>LAPORAN PENANGGUNG JAWAB KEUANGAN</h2></center>
          <center>          <h4>LUG STIKOM</h4></center> -->
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <!-- <th>No Pendaftaran</th> -->
              <th>Nama</th>
              <th>Nilai Tes Soal</th>
              <th>Nilai Wawancara</th>
              <th>Nilai Akhir</th>
              <th>Jabatan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php $i =1; ?>
              @foreach ($rangkings as $rangking)


            <tr>
              <td>1</td>
              <td>{{$rangking->name}}</td>
              <td>{{$rangking->soal}}</td>
              <td>{{$rangking->wawancara}}</td>
              <td>{{$rangking->total}}</td>
              <td>{{$rangking->minat}}</td>
              <td>{{$rangking->status_test}}</td>
              <td>
                <a href="{{route('rangking.edit',$rangking->id)}}" class="btn btn-default btn-sm">
                  <span class="pe-7s-pen"></span>Lolos</a>
                <a href="{{route('edit2',$rangking->id)}}" class="btn btn-default btn-sm">
                  <span class="pe-7s-pen"></span>Tidak Lolos</a>

              </td>

            </tr>
            @endforeach



            </tbody>

          </table>
        </div>
      </div>
      <div class="fixed-bottom">

      </div>
    </div>

@endsection
