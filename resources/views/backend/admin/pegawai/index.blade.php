@extends('layouts.master')

@section('content')
@if(Auth::user()->ha == 'admin')
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1>Pegawai</h1>
          <img class="img-responsive center-block" style="width: 100px; height: auto; margin-bottom: 20px;" src="image/lug.png" alt=""/>
        </div>
      </div>
      <div class="row jumbotron">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top:50px">
          @if($menu == 'create')
          <form action="{{ route('pegawai.store') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="nip">NIP</label>
              <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP" value="{{ old('nip') }}">

            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}">

            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" value="{{ old('alamat') }}">

            </div>
            <div class="form-group">
              <label for="ttl">TTL</label>
              <input type="date" class="form-control" id="ttl" name="ttl"  value="{{ old('ttl') }}">

            </div>
            <div class="form-group">

                <label for="jk" >Jenis Kelamin</label>

                <div class="col-md-12">
                  <div class="radio">
                    <label><input type="radio" name="jk" value="pria">Pria</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="jk" value="wanita">Wanita</label>
                  </div>
                </div>
            </div>

            <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                <label for="jabatan" >Jabatan</label>

                <div class="col-md-12">
                  <select class="form-control" name="jabatan" id="select">
                    @foreach ($jabatans as $jabatan)
                    <option value="{{$jabatan->kode_jabatan}}">{{$jabatan->jabatan}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label for="email"><br>Email</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}">

            </div>
            <div class="form-group">
              <label for="tlp">Telepon</label>
              <input type="tlp" class="form-control" id="tlp" name="tlp" placeholder="Telepon" value="{{ old('tlp') }}">

            </div>
            <div class="form-group">
              <label for="tglmskkrj">Tanggal Masuk Kerja</label>
              <input type="date" class="form-control" id="tglmskkrj" name="tglmskkrj" placeholder="tgl masuk" value="{{ old('tglmskkrj') }}">

            </div>
            <div class="form-group">
              <label for="pt">Pendidikan Terakhir</label>
              <!-- <input type="text" class="form-control" id="pt" name="pt"  placeholder="pendidikan terakhir" value="{{ old('pt') }}"> -->
              <select class="form-control" name="pt" id="select">
                <option value="SI/TI">Sistem Informasi</option>
                <option value="SI/TI">Teknik Informatika</option>
                <option value="HUKUM/SOSPOL">Hukum</option>
                <option value="HUKUM/SOSPOL">Sosial Politik</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Ekonomi</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Akutansi</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Management</option>
              </select>
            </div>
            <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                <label for="agama" >Agama</label>

                <div class="col-md-12">
                  <select class="form-control" name="agama" id="select">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="konghuchu">Konghuchu</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="sk" >Status Kawain</label>

                <div class="col-md-12">
                  <div class="radio">
                    <label><input type="radio" name="sk" value="nikah">Nikah</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="sk" value="single">Single</label>
                  </div>
                </div>
            </div>
            <div class="form-group">
                <label for="sp" >Status Pegawai</label>

                <div class="col-md-12">
                  <div class="radio">
                    <label><input type="radio" name="sp" value="tetap">Tetap</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="sp" value="tidak">Tidak</label>
                  </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          @else
          <form action="{{route('pegawai-update')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <!-- <label for="nip">NIP</label> -->
              <input type="hidden" class="form-control" id="nip" name="nip" placeholder="NIP" value="{{$pegawai->nip}}" >

            </div>
            <div class="form-group">
              <label for="nama2">Nama</label>
              <input type="text" class="form-control" id="nama2" name="nama2" placeholder="Nama Lengkap" value="{{$pegawai->nama}}">

            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap" value="{{$pegawai->alamat }}">

            </div>
            <div class="form-group">
              <label for="ttl">TTL</label>
              <input type="date" class="form-control" id="ttl" name="ttl"  value="{{$pegawai->ttl}}">

            </div>
            <div class="form-group">

                <label for="jk" >Jenis Kelamin</label>

                <div class="col-md-12">
                  <div class="radio">
                    <label><input type="radio" name="jk" value="pria">Pria</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="jk" value="wanita">Wanita</label>
                  </div>
                </div>
            </div>

            <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                <label for="jabatan" >Jabatan</label>

                <div class="col-md-12">
                  <select class="form-control" name="jabatan" id="select">
                    @foreach ($jabatans as $jabatan)
                    <option value="{{$jabatan->kode_jabatan}}">{{$jabatan->jabatan}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label for="email"><br>Email</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{$pegawai->email}}">

            </div>
            <div class="form-group">
              <label for="tlp">Telepon</label>
              <input type="tlp" class="form-control" id="tlp" name="tlp" placeholder="Telepon" value="{{$pegawai->no_tlp}}">

            </div>
            <div class="form-group">
              <label for="tglmskkrj">Tanggal Masuk Kerja</label>
              <input type="date" class="form-control" id="tglmskkrj" name="tglmskkrj" placeholder="tgl masuk" value="{{$pegawai->tgl_msk}}">

            </div>
            <div class="form-group">
              <label for="pt">Pendidikan Terakhir</label>
              <!-- <input type="text" class="form-control" id="pt" name="pt"  placeholder="pendidikan terakhir" value="{{$pegawai->pddk_thr}}"> -->
              <select class="form-control" name="pt" id="select">
                <option value="SI/TI">Sistem Informasi</option>
                <option value="SI/TI">Teknik Informatika</option>
                <option value="HUKUM/SOSPOL">Hukum</option>
                <option value="HUKUM/SOSPOL">Sosial Politik</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Ekonomi</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Akutansi</option>
                <option value="EKONOMI/AKUTANSi/MANAGEMEN">Management</option>
              </select>

            </div>

            <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                <label for="agama" >Agama</label>

                <div class="col-md-12">
                  <select class="form-control" name="agama" id="select">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="konghuchu">Konghuchu</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label for="sk" >Status Kawain</label>

                <div class="col-md-12">
                  <div class="radio">
                    <label><input type="radio" name="sk" value="nikah">Nikah</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="sk" value="single">Single</label>
                  </div>
                </div>
            </div>
            <div class="form-group">
                <label for="sp" >Status Pegawai</label>

                <div class="col-md-12">
                  <div class="radio">
                    <label><input type="radio" name="sp" value="tetap">Tetap</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="sp" value="tidak">Tidak</label>
                  </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{route('pegawai.index')}}" class="btn btn-primary btn-sm">
              <span class="pe-7s-pen"></span>Create</a>

          </form>
          @endif
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="max-height: 1030px; overflow-y:scroll;">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>NIP</th>
              <th>Nama Pegawai</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            <?php $i =1; ?>
            @foreach ($pegawais as $pegawai)

            </thead>
            <tbody>
            <tr>
              <td><?php echo ($i++ +($pegawais->currentPage()*$pegawais->perPage())-$pegawais->perPage());?></td>
              <td>{{$pegawai->nip}}</td>
              <td>
                <a href="{{route('pegawai.show',$pegawai->nip)}}">
                  {{$pegawai->nama}}
                </a>
                </td>
              <td>{{$pegawai->status_pegawai}}</td>
              <td>
                <a href="{{route('pegawai.edit',$pegawai->nip)}}" class="btn btn-default btn-sm">
                  <span class="pe-7s-pen"></span>Edit</a>

            <form method="POST" action="{{route('pegawai.destroy',$pegawai->nip)}}" style="display: inline;">
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
    @elseif(Auth::user()->ha == 'hrd')
    <div class="row jumbotron">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="max-height: 1030px; overflow-y:scroll;">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>NIP</th>
          <th>Nama Pegawai</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
        <?php $i =1; ?>
        @foreach ($pegawais as $pegawai)

        </thead>
        <tbody>
        <tr>
          <td><?php echo ($i++ +($pegawais->currentPage()*$pegawais->perPage())-$pegawais->perPage());?></td>
          <td>{{$pegawai->nip}}</td>
          <td>
            <a href="{{route('pegawai.show',$pegawai->nip)}}">
              {{$pegawai->nama}}
            </a>
            </td>
          <td>{{$pegawai->status_pegawai}}</td>
          <td>
            <a href="{{route('pegawai.edit',$pegawai->nip)}}" class="btn btn-default btn-sm">
              <span class="pe-7s-pen"></span>Edit</a>

        <form method="POST" action="{{route('pegawai.destroy',$pegawai->nip)}}" style="display: inline;">
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

    @endif

@endsection
