@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Detail Pegawai</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <blockquote>
              <p>NIP : {{$pegawai->nip}}</p>
              <p>Nama Pegawai : {{$pegawai->nama}}</p>
              <p>Alamat : {{$pegawai->alamat}}</p>
              <p>TTL : {{$pegawai->ttl}}</p>
              <p>Jenis Kelamin : {{$pegawai->jk}}</p>
              <p>Jabatan : {{$pegawai->jabatan}}</p>
              <p>No Telepon : {{$pegawai->no_tlp}}</p>
              <p>Email : {{$pegawai->email}}</p>
              <p>Tanggal Masuk : {{$pegawai->tgl_msk}}</p>
              <p>Agama : {{$pegawai->pddk_thr}}</p>
              <p>Status Nikah : {{$pegawai->agama}}</p>
              <p>Staus Pekerjaan : {{$pegawai->status}}</p>
              <p>Pendidikan Terakhir : {{$pegawai->status_pegawai}}</p>
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
