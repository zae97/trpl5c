<div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

<!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

-->

  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/" class="simple-text">
                HRD
            </a>
        </div>

        <ul class="nav">
            <!-- <li class="active">
                <a href="dashboard.html">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard HRD</p>
                </a>
            </li> -->
            <li>
                <a href="{{route('pelamar.index')}}">
                    <i class="pe-7s-user"></i>
                    <p>Data Pelamar</p>
                </a>
            </li>
            <li>
                <a href="{{route('pegawai.index')}}">
                    <i class="pe-7s-user"></i>
                    <p>Data Pegawai</p>
                </a>
            </li>
            <li>
                <a href="/dicari">
                    <i class="pe-7s-note2"></i>
                    <p>Dicari Jabatan</p>
                </a>
            </li>
            <li>
                <a href="/rangking">
                    <i class="pe-7s-note2"></i>
                    <p>Rekapitulasi Nilai</p>
                </a>
            </li>

          </ul>

  </div>
</div>
