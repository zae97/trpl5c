@extends('layouts.master')

@section('content')
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1>Jabatan yang dicari</h1>
        </div>
      </div>
      <div class="row jumbotron">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top:50px">
          <form action="{{ route('dicari.store') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                  <label for="jabatan" >Jabatan</label>

                    <select class="form-control" name="jabatan" id="select">
                      @foreach ($jabatans as $jabatan)
                      <option value="{{$jabatan->jabatan}}">{{$jabatan->jabatan}}</option>
                      @endforeach
                    </select>
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="max-height: 1030px; overflow-y:scroll;">
          
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Jabatan Dicari</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php $i =1; ?>
              @foreach ($dicari as $dicari2)
            <tr>
              <td><?php echo ($i++ +($dicari->currentPage()*$dicari->perPage())-$dicari->perPage());?></td>
              <td>{{$dicari2->dicari}}</td>
              <td>
                  {{$dicari2->dicari}}
              </td>
              <td>

            <form method="POST" action="{{route('dicari.destroy',$dicari2->id)}}" style="display: inline;">
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
