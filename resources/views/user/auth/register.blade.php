@extends('user.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/user_register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ttl') ? ' has-error' : '' }}">
                            <label for="ttl" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="ttl" type="date" class="form-control" name="ttl" value="{{ old('ttl') }}" required autofocus>

                                @if ($errors->has('ttl'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ttl') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('jk') ? ' has-error' : '' }}">
                            <label for="jk" class="col-md-4 control-label">Jenis Kelamin</label>

                            <div class="col-md-3">
                              <!-- <div class="col-md-12"> -->
                                <!-- <div class="radio"> -->
                                  <label><input type="radio" name="jk" value="pria">Pria</label>
                                <!-- </div>
                                <div class="radio"> -->
                                  <label><input type="radio" name="jk" value="wanita">Wanita</label>
                                <!-- </div> -->
                              <!-- </div> -->
                                @if ($errors->has('jk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_tlp') ? ' has-error' : '' }}">
                            <label for="no_tlp" class="col-md-4 control-label">No Telepon</label>

                            <div class="col-md-6">
                                <input id="no_tlp" type="number" class="form-control" name="no_tlp" value="{{ old('no_tlp') }}" required autofocus>

                                @if ($errors->has('no_tlp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_tlp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('no_tlp') ? ' has-error' : '' }}">
                            <label for="no_tlp" class="col-md-4 control-label">Lowongan yang dipilih</label>

                            <div class="col-md-6">
                              <div class="col-md-12">
                                  <select class="form-control" name="jabatan" id="select">
                                    @foreach ($jabatans as $jabatan)
                                    <option value="{{$jabatan->jabatan}}">{{$jabatan->jabatan}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                        </div>

                        <div class="form-group{{ $errors->has('pddk_thr') ? ' has-error' : '' }}">
                            <label for="pddk_thr" class="col-md-4 control-label">Pendidikan Terakhir</label>

                            <div class="col-md-6">
                              <div class="col-md-12">
                                <select class="form-control" name="pddk_thr" id="select">
                                  <option value="SI/TI">Sistem Informasi</option>
                                  <option value="SI/TI">Teknik Informatika</option>
                                  <option value="HUKUM/SOSPOL">Hukum</option>
                                  <option value="HUKUM/SOSPOL">Sosial Politik</option>
                                  <option value="EKONOMI/AKUTANSi/MANAGEMEN">Ekonomi</option>
                                  <option value="EKONOMI/AKUTANSi/MANAGEMEN">Akutansi</option>
                                  <option value="EKONOMI/AKUTANSi/MANAGEMEN">Management</option>
                                </select>
                              </div>
                                @if ($errors->has('pddk_thr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pddk_thr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
                            <label for="agama" class="col-md-4 control-label">Agama</label>

                            <div class="col-md-6">
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

                                @if ($errors->has('agama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
