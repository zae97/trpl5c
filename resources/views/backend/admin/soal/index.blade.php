@extends('layouts.master')

@section('content')
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1>Kategori</h1>
          <img class="img-responsive center-block" style="width: 100px; height: auto; margin-bottom: 20px;" src="image/lug.png" alt=""/>
        </div>
      </div>
      <div class="row jumbotron">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-top:50px">
          <form action="{{ route('kategori.store') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <input type="text" class="form-control" id="kategori" name="kategori" placeholder="kategori" value="{{ old('kategori') }}">

            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="max-height: 1030px; overflow-y:scroll;">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php $i =1; ?>
              @foreach ($kategoris as $kategori)

            <tr>
              <td><?php echo ($i++ +($kategoris->currentPage()*$kategoris->perPage())-$kategoris->perPage());?></td>
              <td>
              <a href="{{route('kategori.show',$kategori->id)}}">
                {{$kategori->kategori}}
              </a>
              </td>
              <td>
                <a href="" class="btn btn-default btn-sm">
                  <span class="pe-7s-pen"></span>Edit</a>

            <form method="POST" action="{{route('kategori.destroy',$kategori->id)}}" style="display: inline;">
              {{method_field('DELETE')}}
              {!! csrf_field() !!}
                <botton type="submit" class="btn btn-danger btn-sm delete-confirm">
                  <span class="pe-7s-trash"></span>Hapus
                </button>
            </form>
              </td>
              @endforeach

            </tr>

            </tbody>

          </table>
        </div>
      </div>
      <div class="fixed-bottom">
        <!-- <img src="{{ asset('/img/PENGURUS2017.png') }}" class="center-block img-responsive" alt=""/> -->
      </div>
    </div>

@endsection
