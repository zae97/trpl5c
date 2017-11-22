@extends('layouts.master')

@section('content')
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1>Pelamar</h1>
          <img class="img-responsive center-block" style="width: 100px; height: auto; margin-bottom: 20px;" src="image/lug.png" alt=""/>
        </div>
      </div>
      <div class="row jumbotron">
        <div class="col-md-12" style="max-height: 1030px; overflow-y:scroll;">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>TTL</th>
              <th>No Telepon</th>
              <th>Alamat</th>
              <th>Agama</th>
              <th>Pendidikan Terakhir</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              <?php $i =1; ?>
              @foreach ($pelamars as $pelamar)

            <tr>
              <td><?php echo ($i++ +($pelamars->currentPage()*$pelamars->perPage())-$pelamars->perPage());?></td>
              <!-- <td>{{$pelamar->id}}</td> -->
              <td>
                <a href="{{route('pelamar.show',$pelamar->id)}}">
                {{$pelamar->name}}
                </a>
              </td>
              <td>{{$pelamar->ttl}}</td>
              <td>{{$pelamar->no_tlp}}</td>
              <td>{{$pelamar->alamat}}</td>
              <td>{{$pelamar->agama}}</td>
              <td>{{$pelamar->pddk_thr}}</td>
              <td>{{$pelamar->status}}</td>
              <td>
                <a href="{{route('pelamar.edit',$pelamar->id)}}" class="btn btn-default btn-sm">
                  <span class="pe-7s-pen"></span>Verivikasi</a>

            <form method="POST" action="{{route('pelamar.destroy',$pelamar->id)}}" style="display: inline;">
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
      </div>
    </div>

@endsection
