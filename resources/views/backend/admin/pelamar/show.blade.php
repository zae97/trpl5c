@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
      @if(Auth::user()->ha == 'hrd' and $test2==null)
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Detail Pegawai</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <blockquote>
              <p>ID : {{$pelamar->id}}</p>
              <p>Nama Pelamar : {{$pelamar->name}}</p>
              <p>Email : {{$pelamar->email}}</p>
              <p>Alamat : {{$pelamar->alamat}}</p>
              <p>Tempat Tanggal Lahir : {{$pelamar->ttl}}</p>
              <p>Jenis Kelamin : {{$pelamar->jk}}</p>
              <p>No Telepon : {{$pelamar->no_tlp}}</p>
              <p>Pendidikan Terakhir : {{$pelamar->pddk_thr}}</p>
              <p>Agama : {{$pelamar->agama}}</p>
              <p>Status : {{$pelamar->status}}</p>
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
      <div class="col-md-6">
          <form action="{{route('kriteria-simpan')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="rp">Jenjang Pendidikan - Competency</label>
              <select class="form-control" name="jenjang" id="select">
                <option value="">-</option>
                <option value="d3">D3</option>
                <option value="s1">S1</option>
                <option value="s2">S2</option>
              </select>
            </div>
            <div class="form-group">
              <label for="rp">Akreditasi - Competency</label>
              <select class="form-control" name="akreditasi" id="select">
                <option value="">-</option>
                <option value="A">Akreditasi A</option>
                <option value="B">Akreditasi B</option>
                <option value="C">Akreditasi C</option>
              </select>
            </div>
            <div class="form-group">
              <label for="rp">Lulusan - Competency</label>
              <select class="form-control" name="fresh" id="select">
                <option value="">-</option>
                <option value="1">Fresh Graduate < 1 Tahun </option>
                <option value="2">1-3 Tahun</option>
                <option value="3">>4 Tahun</option>
              </select>
            </div>
            <div class="form-group">
              <label for="pengalaman">Capability</label>
              <select class="form-control" name="capability" id="select">
                <option value="">-</option>
                <option value="Istimewa">Istimewa</option>
                <option value="Bagus">Bagus</option>
                <option value="Cukup">Cukup</option>
                <option value="Kurang">Kurang</option>
                <option value="Buruk">Buruk</option>

              </select>
            </div>
            <div class="form-group">
              <label for="alamat">Commitment</label>
              <select class="form-control" name="commitment" id="select">
                <option value="">-</option>
                <option value="Istimewa">Istimewa</option>
                <option value="Bagus">Bagus</option>
                <option value="Cukup">Cukup</option>
                <option value="Kurang">Kurang</option>
                <option value="Buruk">Buruk</option>

              </select>
              <!-- <input type="number" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="{{ old('alamat') }}"> -->
              <input type="hidden" class="form-control" id="np" name="np" value="{{$np}}">
            </div>
            <div class="form-group">
              <label for="keahlian">Credibility</label>
              <select class="form-control" name="credibility" id="select">
                <option value="">-</option>
                <option value="Istimewa">Istimewa</option>
                <option value="Bagus">Bagus</option>
                <option value="Cukup">Cukup</option>
                <option value="Kurang">Kurang</option>
                <option value="Buruk">Buruk</option>

              </select>
            </div>
            <div class="form-group">
              <label for="pemampilan">Character</label>
              <select class="form-control" name="character" id="select">
                <option value="">-</option>
                <option value="Istimewa">Istimewa</option>
                <option value="Bagus">Bagus</option>
                <option value="Cukup">Cukup</option>
                <option value="Kurang">Kurang</option>
                <option value="Buruk">Buruk</option>                <!-- <option value="Istimewa">Sangat Rapi</option>
                <option value="Bagus">Rapi</option>
                <option value="Cukup">Biasa</option>
                <option value="Kurang">Buruk</option>
                <option value="Buruk">Sangat Buruk</option> -->

              </select>
            </div>
            <div class="form-group">
              <label for="bicara">Capacity</label>
              <select class="form-control" name="capacity" id="select">
                <option value="">-</option>
                <option value="Istimewa">Istimewa</option>
                <option value="Bagus">Bagus</option>
                <option value="Cukup">Cukup</option>
                <option value="Kurang">Kurang</option>
                <option value="Buruk">Buruk</option>

              </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
      </div>
      @elseif(Auth::user()->ha == 'hrd')
      <div class="col-md-6">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Detail Pegawai</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <blockquote>
              <p>ID : {{$pelamar->id}}</p>
              <p>Nama Pelamar : {{$pelamar->name}}</p>
              <p>Email : {{$pelamar->email}}</p>
              <p>Alamat : {{$pelamar->alamat}}</p>
              <p>Tempat Tanggal Lahir : {{$pelamar->ttl}}</p>
              <p>Jenis Kelamin : {{$pelamar->jk}}</p>
              <p>No Telepon : {{$pelamar->no_tlp}}</p>
              <p>Pendidikan Terakhir : {{$pelamar->pddk_thr}}</p>
              <p>Agama : {{$pelamar->agama}}</p>
              <p>Status : {{$pelamar->status}}</p>
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
      <div class="col-md-6">
        <h1>Sudah Terdata</h1>
      </div>
      

      @else
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">Detail Pegawai</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <blockquote>
              <p>ID : {{$pelamar->id}}</p>
              <p>Nama Pelamar : {{$pelamar->name}}</p>
              <p>Email : {{$pelamar->email}}</p>
              <p>Alamat : {{$pelamar->alamat}}</p>
              <p>Tempat Tanggal Lahir : {{$pelamar->ttl}}</p>
              <p>Jenis Kelamin : {{$pelamar->jk}}</p>
              <p>No Telepon : {{$pelamar->no_tlp}}</p>test2
              <p>Pendidikan Terakhir : {{$pelamar->pddk_thr}}</p>
              <p>Agama : {{$pelamar->agama}}</p>
              <p>Status : {{$pelamar->status}}</p>
              <!-- <small>Back <cite title="Source Title"><a href="">
              to Menu
              </a></cite></small> -->
            </blockquote>
            <h3 class="page-title">@lang('quickadmin.results.title')</h3>

            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('quickadmin.view-result')
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>@lang('quickadmin.results.fields.date')</th>
                                    <td>{{ $test->created_at or '' }}</td>
                                </tr>
                                <tr>
                                    <th>@lang('quickadmin.results.fields.result')</th>
                                    <td>{{ $test->result }}/{{$soal}}</td>
                                </tr>
                            </table>
                        <?php $i = 1 ?>
                        @foreach($results as $result)
                            <table class="table table-bordered table-striped">
                                <tr class="test-option{{ $result->correct ? '-true' : '-false' }}">
                                    <th style="width: 10%">Question #{{ $i }}</th>
                                    <th>{{ $result->question->question_text or '' }}</th>
                                </tr>
                                @if ($result->question->code_snippet != '')
                                    <tr>
                                        <td>Code snippet</td>
                                        <td><div class="code_snippet">{!! $result->question->code_snippet !!}</div></td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>Options</td>
                                    <td>
                                        <ul>
                                        @foreach($result->question->options as $option)
                                            <li style="@if ($option->correct == 1) font-weight: bold; @endif
                                                @if ($result->option_id == $option->id) text-decoration: underline @endif">{{ $option->option }}
                                                @if ($option->correct == 1) <em>(correct answer)</em> @endif
                                                @if ($result->option_id == $option->id) <em>(your answer)</em> @endif
                                            </li>
                                        @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Answer Explanation</td>
                                    <td>
                                    {!! $result->question->answer_explanation  !!}
                                        @if ($result->question->more_info_link != '')
                                            <br>
                                            <br>
                                            Read more:
                                            <a href="{{ $result->question->more_info_link }}" target="_blank">{{ $result->question->more_info_link }}</a>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        <?php $i++ ?>
                        @endforeach
                        </div>
                    </div>

                    <p>&nbsp;</p>

                    <a href="{{ route('tests.index') }}" class="btn btn-default">Take another quiz</a>
                    <a href="{{ route('results.index') }}" class="btn btn-default">See all my results</a>
                </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
      @endif

    </div>
  </div>
@endsection
