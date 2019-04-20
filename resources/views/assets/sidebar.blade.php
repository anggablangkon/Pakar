<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="@if($pages == 'index') active @endif">
      <a href="{{ url('/index') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a>
    </li>

    <!-- sidebar digunakan untuk admin -->
    @if(Auth::user()->role == 2) 
    <li class="@if($pages == 'datapengguna') active @endif">
      <a href="{{ url('/datapengguna') }}"><i class="icon icon-home"></i> <span>Data Pengguna</span></a>
    </li>
    <li class="@if($pages == 'datajeniskulit') active @endif">
      <a href="{{ url('/datajeniskulit') }}"><i class="icon icon-home"></i> <span>Data Jenis Kulit</span></a>
    </li>
    <li class="@if($pages == 'datakerusakankulit') active @endif">
      <a href="{{ url('/datakerusakankulit') }}"><i class="icon icon-home"></i> <span>Data Kerusakan Kulit</span></a>
    </li>
     <li class="@if($pages == 'datatindakan') active @endif">
      <a href="{{ url('/datatindakan') }}"><i class="icon icon-home"></i> <span>Data Tindakan</span></a>
    </li>
     <li class="@if($pages == 'datacream') active @endif">
      <a href="{{ url('/datacream') }}"><i class="icon icon-home"></i> <span>Data Cream</span></a>
    </li>
    {{-- <li class="@if($pages == 'datagejala') active @endif"><a href="{{ url('/datagejala') }}"><i class="icon icon-home"></i> <span>Data Gejala</span></a></li> --}}
  	@endif
    
    <!-- sidebar yang digunakan perawat -->
    @if(Auth::user()->role == 1) 
    <li class="@if($pages == 'pendaftaranpasienbaru') active @endif">
      <a href="{{ url('/pendaftaranpasienbaru') }}"><i class="icon icon-home"></i> <span>Pendaftaran Pasien Baru</span></a>
    </li>
    <li class="@if($pages == 'pendaftaranpasien') active @endif">
      <a href="{{ url('/pendaftaranpasien') }}"><i class="icon icon-home"></i> <span>Pendaftaran Pengobatan</span></a>
    </li>
  	@endif

    <!--  sidabar yang digunakan oleh admin dan perawat -->
    @if(Auth::user()->role == 1 ) 
    <li class="submenu @if($pages == 'rst') active @endif"> 
      <a href="#"><i class="icon icon-list"></i><span>Rekap Data Pasien</span> <span class="label label-important">1</span></a>
      <ul>
        <li class="@if($pages == 'rst') active @endif">
          <a href="{{ url('/rekappasistemterdaftar') }}">Pasien Terdaftar</a>
        </li>
      </ul>
    </li>
    @endif

    <!-- default sidebar -->
    <li class="">
      <a href=""><i class="icon icon-home"></i> <span>Akses Sistem Pakar</span></a>
    </li>
    
  </ul>
</div>
<!--sidebar-menu-->