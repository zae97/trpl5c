@extends('layouts.master')

@section('content')
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1>Kriteria</h1>
          <img class="img-responsive center-block" style="width: 100px; height: auto; margin-bottom: 20px;" src="image/lug.png" alt=""/>
        </div>
      </div>
      <div class="row jumbotron">
       
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="max-height: 1030px; overflow-y:scroll;">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No</th>
              <th>Kriteria</th>
            </tr>
            </thead>
            <tbody>
              <?php $i =1; ?>
              @foreach ($kriterias as $kriteria)
            <tr>
              <td><?php echo ($i++ +($kriterias->currentPage()*$kriterias->perPage())-$kriterias->perPage());?></td>
              <td>{{$kriteria->kriteria}}</td>
             
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
