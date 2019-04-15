@extends('layouts.layouts')

@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="{{ url('/index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="index.html" title="Data Gejala" class="tip-bottom"><i class="icon-home"></i> Data Gejala</a>
    </div>
  </div>
<!--End-breadcrumbs-->

  <!-- container fluid -->
  <div class="container-fluid">

  <!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Data Gejala</h5>
        </div>

        <!-- table untuk menampilkan data gejala -->
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
                <tr class="gradeX">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a href="" class="btn btn-sm btn-info">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
              </tbody>
            </table>

      </div>
    </div>
  <!--End-Chart-box--> 

  </div>
  <!-- end container fluid --> 

</div>

@endsection