<div class="sidebar" data-color="orange" data-image="assets/img/sidebar-5.jpg">

<!--

    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag

-->

  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/" class="simple-text">
               KANTOR POS
            </a>
        </div>

        <ul class="nav">
            <!-- <li class="active">
                <a href="dashboard.html">
                    <i class="pe-7s-graph"></i>
                    <p>Dashboard</p>
                </a>
            </li> -->
            <li>
                <a href="{{route('register')}}">
                    <i class="pe-7s-user"></i>
                    <p>Tambah Admin</p>
                </a>
            </li>
            <li>
                <a href="{{route('pegawai.index')}}">
                    <i class="pe-7s-user"></i>
                    <p>Data Pegawai</p>
                </a>
            </li>
            <li>
                <a href="{{route('jabatan.index')}}">
                    <i class="pe-7s-note2"></i>
                    <p>Data Jabatan</p>
                </a>
            </li>
            <li>
                <a href="/dicari">
                    <i class="pe-7s-note2"></i>
                    <p>Dicari Jabatan</p>
                </a>
            </li>
            <li>
                <a href="{{route('pelamar.index')}}">
                    <i class="pe-7s-news-paper"></i>
                    <p>Data Pelamar</p>
                </a>
            </li>
            <!-- <li>
                <a href="{{route('pelamar.index')}}">
                    <i class="pe-7s-note2"></i>
                    <p>Data Mutasi </p>
                </a>
            </li> -->


            <li >
                <!-- <a href="icons.html"> -->
                    <i class=""></i>
                    <p>Seleksi Pelamar</p>
                <!-- </a> -->
                <ul >
                  <li><a href="{{route('topics.index')}}"><i class="pe-7s-file"></i> Kategori Soal</a></li><br>
                  <li><a href="{{route('questions.index')}}"><i class="pe-7s-file"></i> Soal</a></li><br>
                  <li><a href="{{route('kriteria.index')}}"><i class="pe-7s-folder"></i> Data Kriteria</a></li><br>
                  <!-- <li><a href=""><i class="pe-7s-graph3"></i> Pembobotan kriteria</a></li><br> -->
                  <li><a href="{{route('rangking.index')}}"><i class="pe-7s-cup"></i> Perangkingan</a></li><br>
                </ul>
            </li>
          </ul>

  </div>
</div>
