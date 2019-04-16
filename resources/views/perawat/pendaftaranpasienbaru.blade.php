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
          <form action="{{ url('/prosespendaftaranpasienbaru') }}" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">No. Anggota:</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="" value="PS-0{{ $noanggota }}" disabled />
                <input type="hidden" name="noanggota" value="{{ $noanggota }}" placeholder="" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              <div class="controls">
                <input type="text" name="nama" class="span11" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jenis Kelamin</label>
              <div class="controls">
                <select class="span11" name="jk" required>
                  <option value="">-- Jenis Kelamin --</option>
                  <option value="p">Pria</option>
                  <option value="w">Wanita</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Lahir</label>
              <div class="controls">
                <input type="date" name="date" class="span11" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Alamat:</label>
              <div class="controls">
                <textarea class="span11" name="alamat" required></textarea>
                <span class="help-block">Alamat Lengkap</span> </div>
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
          <h5 title="" class="tip-bottom">Laporan Pendaftaran</h5>
        </div>
        <div class="widget-content nopadding">
        
        <div class="widget-content">
          @include('helper/message')
          <br/>

          @if(Session::get('pendaftarananggota'))
          <label>Laporan Pendaftaran Pasien Baru :</label>
          <p>Pendaftaran berhasil diproses atas nama <font color="green"> {{ $dataanggota->nama }} </font></p>        
            <ul>
              <li><a href="{{ url('/transkrippendaftaran') }}/Idanggota={{ Session::get('pendaftarananggota') }}" target="parent"> Silahkan Cetak Bukti Pendaftaran Disini </a></li>
              <li><a href="{{ url('/idcard') }}/Idanggota={{ Session::get('pendaftarananggota') }}" target="parent"> Silahkan Cetak Kartu Anggota </a></li>
            </ul>
          @endif

        </div>

        </div>
      </div>
      
    </div>
    <!-- end span6 --> 


  </div>
  <!--end row fluid -->

  <!--Menampilkan data anggota-->    
     <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Pendaftaran Pasien Baru Hari Ini</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No Anggota</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tgl Lahir</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($detailanggota as $tampil)
                <tr class="gradeX">
                  <td>PS-0{{ $tampil->noanggota }}</td>
                  <td>{{ $tampil->nama }}</td>
                  <td>@if($tampil->jk == 'P') Pria @else Wanita @endif</td>
                  <td>{{ $tampil->tgl_lahir }}</td>
                  <td>{{ $tampil->alamat }}</td>
                  <td>
                    <a href="" class="btn btn-mini btn-info">Edit</a>

                    <a href="#myHapus{{ $tampil->noanggota }}" data-toggle="modal" class="btn btn-mini btn-danger">Hapus</a>
                    <!-- modal untuk hapus data -->
                    <div id="myHapus{{ $tampil->noanggota }}" class="modal hide">
                      <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button">×</button>
                        <h3>Peringatan Sistem !</h3>
                      </div>
                      <div class="modal-body">
                        <p>Apakah anda yakin akan menghapus data dengan nama <b>{{ $tampil->nama }}</b></p>
                      </div>
                      <div class="modal-footer"> <a class="btn btn-primary" href="{{ url('/deleteanggota') }}/Idanggota={{ $tampil->noanggota }}">Hapus</a> <a data-dismiss="modal" class="btn" href="#">Batal</a> </div>
                    </div>
                    
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
  <!--End-anggota--> 
  
  </div>
  <!-- end container fluid -->

</div>
<!-- end content -->

@endsection