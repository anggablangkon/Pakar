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
  
  <div class="container-fluid">
  <hr>
  <div class="row-fluid">

    <!-- form pertama -->
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Pendaftaran Pasein</h5>
        </div>
        <div class="widget-content nopadding">
          
          <!-- form pencarian -->
          <form action="{{ url('/pencarianpasien') }}" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">No Pasien :</label>
              <div class="controls">
                <input type="text" class="span11" name="nopasien" placeholder="" /> <br/><br/>
                <input type="submit" name="cari" value="Search" class="btn btn-primary">
              </div>
            </div>
          </form>

          <form action="okejoen" method="" class="form-horizontal">
             <div class="control-group">
              <label class="control-label">No Pasien :</label>
              <div class="controls">
                <input type="text" class="span11" value="@if($datapasien->nama == 'kosong') @else PS-0{{ $datapasien->noanggota }} @endif" disabled />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              <div class="controls">
                <input type="text" class="span11" value="@if($datapasien->nama == 'kosong') @else {{ $datapasien->nama }} @endif" disabled />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kelamin</label>
              <div class="controls">
                <input type="text"  class="span11" value="@if($datapasien->jk == 'o') @elseif($datapasien->jk == 'P') Pria @else Wanita @endif"  disabled />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Usia</label>
              <div class="controls">
                <!-- menampilkan usia dari tanggal lahir -->
                <input type="text" class="span11" disabled />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat:</label>
              <div class="controls">
                <textarea class="span11" disabled>@if($datapasien->nama == 'kosong') @else {{ $datapasien->alamat }} @endif</textarea>
                <span class="help-block">Alamat Lengkap</span> </div>
            </div>
             <div class="control-group">
              <label class="control-label">Tujuan Poli</label>
              <div class="controls">
                <select >
                  <option>SKINCARE </option>
                  <option>APOTIK</option>
                  <option>RAWAT JALAN</option>
                  <option>RONTGEN</option>
                  <option>LABOLATERIUM</option>
                  <option>EKG (REKAM JANTUNG)</option>
                  <option>USG (ULTRASONOGRAFY)</option>
                  <option>TERAPI INHALASI</option>
                </select>
              </div>
            </div>
            
            <div class="form-actions" style="text-align: center;">
              <button type="submit" class="btn btn-success">Simpan Pendaftaran</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </div>
          </form>
        </div>
      </div>

    </div>
    <!-- end span6 --> 
    
    <!-- form kedua -->  
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5 title="Rekap Anamnesis Akan Muncul Setelah Input Pendaftaran  " class="tip-bottom">Rekap Pengobatan</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" class="form-horizontal">

            <p>Belum ada rekap pengobtan yang dilakukan</p>

          </form>
        </div>
      </div>
      
    </div>
    <!-- end span6 --> 


  </div>
  <!--end row fluid -->
  
  </div>
  <!-- end container fluid -->

</div>
<!-- end content -->

@endsection