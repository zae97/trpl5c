@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-solid">
          <div class="box-header with-border">
            <i class="fa fa-text-width"></i>

            <h3 class="box-title">SOAL</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <blockquote>
              <p>{{$soals->soal}}</p>
              <!-- <small>Back <cite title="Source Title"><a href="">
              to Menu
              </a></cite></small> -->
            </blockquote>
            <form method="POST" action="{{route('soal.update',$soals->id,$soals->jawaban)}}"
              class="form-horizontal">
              {{method_field('PATCH')}}

              {!! csrf_field() !!}
              @foreach ($jawabans as $jawaban)

              <div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="jawaban" name="jawaban" value="{{$jawaban->id}}. {{($jawaban->jawaban) ? $jawaban->jawaban : ''}}" disabled=""/>

              </div>

              @endforeach


                <!-- <div class="form-group">
                  <div class="col-md-offset-1 col-md-6">
                    <button type="submit" class="btn btn-primary">
                      <span ></span>
                      Simpan Perubahan
                    </button>
                      <a href="" class="btn btn-danger">
                        <span ></span>Batal</a>


                    </button>
                  </div>
                </div> -->

              </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- ./col -->
    </div>
  </div>
@endsection
