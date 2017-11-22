<!doctype html>
<html lang="en">
<head>
  @include('layouts.LTE._header')


</head>
<body>

<div class="wrapper">
  @include('layouts.LTE.hrd._sidebar2')


    <div class="main-panel">
      @include('layouts.LTE._navbar2')



        <div class="content">
            <div class="container-fluid">
              @if (session('pesan_sukses'))
                <div class="alert alert-success">
                  {{ session('pesan_sukses') }}
                </div>
              @elseif (session('failed'))
                <div class="alert alert-dang') }}er">
                  {{ session('failed') }}
                </div>
              @endif
              @yield('content')

            </div>
        </div>
        @include('layouts.LTE._footer')
    </div>
</div>


</body>

    <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset('assets/js/bootstrap-checkbox-radio-switch.js') }}"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('assets/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ asset('assets/js/light-bootstrap-dashboard.js') }}"></script>

<!-- lte -->

<!-- close lte -->
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{ asset('assets/js/demo.js') }}"></script>
  <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('js/common.js') }}"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Selamat Datang di <b>SPK</b> - Penerimaan Pegawai POS"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
