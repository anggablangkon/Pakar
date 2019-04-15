@extends('layouts.layouts')

@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="{{ url('/index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="index.html" title="Rekap Data Pasien" class="tip-bottom"><i class="icon-home"></i> Rekap Data Pasien</a>
    </div>
  </div>
<!--End-breadcrumbs-->

  <!-- container fluid -->
  <div class="container-fluid">

  <!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Rekap Data Pasien</h5>
        </div>

        <!-- table untuk menampilkan data gejala -->
        <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th style="text-align: left; font-size: 13px">No</th>
                  <th style="text-align: left; font-size: 13px">No Anggota</th>
                  <th style="text-align: left; font-size: 13px">Nama</th>
                  <th style="text-align: left; font-size: 13px">Jenis Kelamin</th>
                  <th style="text-align: left; font-size: 13px">Tgl Lahir</th>
                  <th style="text-align: left; font-size: 13px">Alamat</th>
                  <th style="text-align: left; font-size: 13px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                @foreach($datarekap as $tampil)
                <tr class="gradeX">
                  <td style="font-size: 13px">{{ $no++ }}</td>
                  <td style="font-size: 13px">PS-0{{ $tampil->noanggota }}</td>
                  <td style="font-size: 13px">{{ $tampil->nama }}</td>
                  <td style="font-size: 13px">@if($tampil->jk == 'P') Pria @else Wanita @endif</td>
                  <td style="font-size: 13px">{{ $tampil->tgl_lahir }}</td>
                  <td style="font-size: 13px">{{ $tampil->alamat }}</td>
                  <td>
                    <a href="" class="btn btn-mini btn-info">Edit</a>
                    <a href="#myHapus{{ $tampil->noanggota }}" class="btn btn-mini btn-danger">Hapus</a>
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
  <!--End-Chart-box--> 

  </div>
  <!-- end container fluid --> 

</div>

@endsection