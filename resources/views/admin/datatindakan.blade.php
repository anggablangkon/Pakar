@extends('layouts.layouts')

@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="{{ url('/index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="{{ url('/datakulit') }}" title="Data Jenis Kulit" class="tip-bottom"><i class="icon-home"></i> Data Tindakan</a>
    </div>
  </div>
<!--End-breadcrumbs-->

  <!-- container fluid -->
  <div class="container-fluid">

  <!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg">
          <span class="icon"><i class="icon-plus"></i></span>
          <h5>Tambah Tindakan</h5>
        </div>
        
        <div class="widget-content">
          <div class="controls controls-row">
            <label class="span3 m-wrap"><b>Kode Tindakan</b></label>
            <label class="span3 m-wrap"><b>Nama Tindakan</b></label>
          </div>
          <!-- form action -->
          <form action="{{ url('/simpantindakan') }}" method="post">
          {{ csrf_field() }}
          <div class="controls controls-row">
            <input type="text" autofocus="" required name="kode" placeholder="" class="span3 m-wrap">
            <input type="text" name="nama" required placeholder="" class="span3 m-wrap">
            <button type="submit" class="btn btn-primary span2 m-wrap">SIMPAN</button>
            <button type="reset" class="btn btn-warning span2 m-wrap">RESET</button>
          </div>
          </form>
        </div>

      </div>
    </div>
  <!--End-Chart-box--> 

  @include('helper/message')

  <!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg">
          <span class="icon"><i class="icon-signal"></i></span>
          <h5>Data Jenis Kulit</h5>
        </div>
        <!-- table untuk menampilkan data gejala -->
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th style="text-align: left; font-size: 13px">No</th>
                  <th style="text-align: left; font-size: 13px">Kode Tindakan</th>
                  <th style="text-align: left; font-size: 13px">Nama Tindakan</th>
                  <th style="text-align: left; font-size: 13px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                @foreach($data as $tampil)
                <tr class="gradeX">
                  <td style="font-size: 13px">{{ $no++ }}</td>
                  <td style="font-size: 13px">{{ $tampil->ktindakan }}</td>
                  <td style="font-size: 13px">{{ $tampil->ntindakan }}</td>
                  <td>
                    <a href="#myEdit{{$tampil->id}}" data-toggle="modal" class="btn btn-mini btn-info">Edit</a>

                    <!-- modal edit tindakan-->
                    <div id="myEdit{{$tampil->id}}" class="modal hide">
                      <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button">x</button>
                        <h3>Perbarui Data Tindakan: {{ $tampil->ntindakan }}</h3>
                      </div>

                    <!-- form action-->
                    <form action="edittindakan/{{$tampil->id}}" method="post">
                      {{ csrf_field() }}

                    <!-- modal body-->
                    <div class="modal-body">
                      <div class="control-group">
                        <label class="span3 m-wrap"><b>Kode Tindakan</b></label>
                        <div class="controls">
                          <input type="text" name="kode"  value="{{ $tampil->ktindakan}}">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="span3 m-wrap"><b>Nama Tindakan</b></label>
                        <div class="controls">
                          <input type="text" name="nama"  value="{{ $tampil->ntindakan}}">
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Edit</button>
                      <button data-dismiss="modal" class="btn" href="#">Batal</button>
                    </div>
                    </form>

                    </div>
                    
                    <!-- proses hapus -->
                    <a href="#myHapus{{ $tampil->id }}" data-toggle="modal" class="btn btn-mini btn-danger">Hapus</a>
                    <!-- model untuk hapus data -->
                      <div id="myHapus{{ $tampil->id }}" class="modal hide">
                      <div class="modal-header">
                        <button data-dismiss="modal" class="close" type="button">×</button>
                        <h3>Peringatan Sistem !</h3>
                      </div>
                      <div class="modal-body">
                        <p>Apakah anda yakin akan menghapus data dengan kode <b>{{ $tampil->ktindakan }}</b></p>
                      </div>
                      <div class="modal-footer"> <a class="btn btn-primary" href="{{ url('deletetindakan') }}/kdtindakan={{ $tampil->ktindakan }}">Hapus</a> <a data-dismiss="modal" class="btn" href="#">Batal</a> </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

      </div>
    </div>
  <!--End-Chart-box--> 

  </div>
  <!-- end container fluid --> 

</div>

@endsection