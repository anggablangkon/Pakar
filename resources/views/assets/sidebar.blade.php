<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="@if($pages == 'index') active @endif"><a href="{{ url('/index') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

    <!-- sidebar digunakan untuk admin -->
    @if(Auth::user()->role == 2) 
    <li class="@if($pages == 'datagejala') active @endif"><a href="{{ url('/datagejala') }}"><i class="icon icon-home"></i> <span>Data Gejala</span></a></li>
  	@endif
    
    <!-- sidebar yang digunakan perawat -->
    @if(Auth::user()->role == 1) 
    <li class="@if($pages == 'pendaftaranpasien') active @endif"><a href="{{ url('/pendaftaranpasien') }}"><i class="icon icon-home"></i> <span>Pendaftaran Pasien</span></a></li>
  	@endif

  </ul>
</div>
<!--sidebar-menu-->