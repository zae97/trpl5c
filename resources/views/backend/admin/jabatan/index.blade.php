@extends('layouts.master')

@section('content')
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1>Jabatan</h1>
          <img class="img-responsive center-block" style="width: 100px; height: auto; margin-bottom: 20px;" src="image/lug.png" alt=""/>
        </div>
      </div>
      <div class="row jumbotron">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top:50px">
            @if($menu == 'create')
          <form action="{{ route('jabatan.store') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="{{ old('jabatan') }}">

            </div>
            <div class="form-group">
              <label for="k_jabatan">Kriteria Jabatan</label>
              <select class="form-control" name="k_jabatan" id="select">
                <option value="SI/TI">Sistem Informasi</option>
                <option value="SI/TI">Teknik Informatika</option>
                <option value="HUKUM/SOSPOL">Hukum</option>
                <option value="HUKUM/SOSPOL">Sosial Politik</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Ekonomi</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Akutansi</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Management</option>
              </select>
            </div>
            <div class="form-group">
              <label for="gaji">Gaji Pokok</label>
              <input type="number" class="form-control" id="gaji" name="gaji" placeholder="Gaji" value="{{ old('gaji') }}">

            </div>
            <div class="form-group">
              <label for="tunjangan">Tunjangan</label>
              <input type="number" class="form-control" id="tunjangan" name="tunjangan" placeholder="Tunjangan" value="{{ old('tunjangan') }}">

            </div>
            <div class="form-group">
              <label for="mk">Masa Kerja</label><br>
              <input type="number" id="mk" name="mk" >

                <select  name="mkk" id="select">
                  <option value="jam">Jam</option>
                  <option value="hari">Hari</option>
                  <option value="bulan">Bulan</option>
                  <option value="tahun">Tahun</option>
                </select>
              <!-- <label>Hari</label> -->



            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          @else
          <form action="{{ route('jabatan-update') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="{{$jabatan->jabatan}}">
              <input type="hidden" class="form-control" id="id" name="id"  value="{{$jabatan->kode_jabatan}}">

            </div>
            <div class="form-group">
              <label for="k_jabatan">Kriteria Jabatan</label>
              <select class="form-control" name="k_jabatan" id="select">
                <option value="SI/TI">Sistem Informasi</option>
                <option value="SI/TI">Teknik Informatika</option>
                <option value="HUKUM/SOSPOL">Hukum</option>
                <option value="HUKUM/SOSPOL">Sosial Politik</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Ekonomi</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Akutansi</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Management</option>
              </select>
            </div>
            <div class="form-group">
              <label for="gaji">Gaji Pokok</label>
              <input type="number" class="form-control" id="gaji" name="gaji" placeholder="Gaji" value="{{$jabatan->gaji}}">

            </div>
            <div class="form-group">
              <label for="tunjangan">Tunjangan</label>
              <input type="number" class="form-control" id="tunjangan" name="tunjangan" placeholder="Tunjangan" value="{{$jabatan->tunjangan}}">

            </div>
            <div class="form-group">
              <input type="number" id="mk" name="mk" >

                <select  name="mkk" id="select">
                  <option value="jam">Jam</option>
                  <option value="hari">Hari</option>
                  <option value="bulan">Bulan</option>
                  <option value="tahun">Tahun</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{route('jabatan.index')}}" class="btn btn-primary btn-sm">
              <span class="pe-7s-pen"></span>Create</a>

          </form>
          @endif
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="max-height: 1030px; overflow-y:scroll;">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <!-- <th>No</th> -->
              <th>Kode Jabatan</th>
              <th>Jabatan</th>
              <th>Masa Kerja</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php $i =1; ?>
              @foreach ($jabatans as $jabatan)
            <tr>
              <td>{{$jabatan->kode_jabatan}}</td>
              <td>
                <a href="{{route('jabatan.show',$jabatan->kode_jabatan)}}">
                  {{$jabatan->jabatan}}
                </a>
              </td>
              <td>{{$jabatan->masa_kerja}}</td>
              <td>
                <a href="{{route('jabatan.edit',$jabatan->kode_jabatan)}}" class="btn btn-default btn-sm">
                  <span class="pe-7s-pen"></span>Edit</a>

            <form method="POST" action="{{route('jabatan.destroy',$jabatan->kode_jabatan)}}" style="display: inline;">
              {{method_field('DELETE')}}
              {!! csrf_field() !!}
                <botton type="submit" class="btn btn-danger btn-sm delete-confirm">
                  <span class="pe-7s-trash"></span>Hapus
                </button>
            </form>


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
