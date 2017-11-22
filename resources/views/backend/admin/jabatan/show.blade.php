@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Detail Jabatan</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <blockquote>
              <p>Kode Jabatan : {{$jabatan->kode_jabatan}}</p>
              <p>Nama jabatan : {{$jabatan->jabatan}}</p>
              <p>Kriteria jabatan : {{$jabatan->kriteria_jabatan}}</p>
              <p>Gaji : {{$jabatan->gaji}}</p>
              <p>Tunjangan : {{$jabatan->tunjangan}}</p>
              <p>Masa Kerja : {{$jabatan->masa_kerja}}</p>
              <!-- <small>Back <cite title="Source Title"><a href="">
              to Menu
              </a></cite></small> -->
            </blockquote>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
    </div>
  </div>
@endsection
