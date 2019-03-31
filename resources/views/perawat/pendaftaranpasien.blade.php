@extends('layouts.layouts')

@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="{{ url('/index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="index.html" title="Form Pendaftaran Pasien" class="tip-bottom"><i class="icon-home"></i> Form Pendaftaran Pasien</a>
    </div>
  </div>
<!--End-breadcrumbs-->

  <!-- container fluid -->
  <div class="container-fluid">

  <!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Form Pendaftaran Pasien</h5>
        </div>

      </div>
    </div>
  <!--End-Chart-box--> 

  </div>
  <!-- end container fluid --> 

</div>

@endsection