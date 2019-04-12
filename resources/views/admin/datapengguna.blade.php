@extends('layouts.layouts')

@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="{{ url('/index') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="{{ url('/datapengguna') }}" title="Data Pengguna Sistem" class="tip-bottom"><i class="icon-home"></i> Data Pengguna</a>
    </div>
  </div>
<!--End-breadcrumbs-->
 <div class="container-fluid">
  <div class="row-fluid">

  <!--form-box-->    
  <!-- message -->
  	@include('helper/message')

        <!-- content -->
        <div class="row-fluid">
	      <div class="span5">
	        <div class="widget-box">
	          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
	            <h5>Form Data Pengguna</h5>
	          </div>
	          <div class="widget-content nopadding">

	          	<!-- message -->

	            <form class="form-horizontal" method="post" action="{{ url('/createdatapengguna') }}" name="basic_validate" id="basic_validate" novalidate="novalidate">
	              {{ csrf_field() }}
	              <div class="control-group">
	                <label class="control-label">Username</label>
	                <div class="controls">
	                  <input type="text" class="span11" name="username" id="required">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Nama Penguna</label>
	                <div class="controls">
	                  <input type="text" class="span11" name="nama" >
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Password</label>
	                <div class="controls">
	                  <input type="password" class="span11" name="password">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Status Pengguna</label>
	                <div class="controls">
		                <select class="span11" name="role" required>
		                  <option value="">-- Status Pengguna --</option>
		                  <option value="1">Perawat</option>
		                  <option value="2">Admin</option>
		                  <option value="3">Dokter</option>
		                </select>
		            </div>
	              </div>
	              <div class="form-actions">
	                <input type="submit" value="SIMPAN" class="btn btn-success">
	                <input type="reset" value="CANCEL" class="btn btn-warning">
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>

	      <div class="span7">
	        <div class="widget-box">
	          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
	            <h5>Data Pengguna Sistem</h5>
	          </div>
	          <!-- menampilkan nama pengguna sistem -->
				
				<div class="widget-content nopadding">
		            <table class="table table-bordered data-table">
		              <thead>
		                <tr>
		                  <th>No</th>
		                  <th>User</th>
		                  <th>Nama Pengguna</th>
		                  <th>Status</th>
		                  <th>Aksi</th>
		                </tr>
		              </thead>

		              <tbody>
		              	<?php $no = 1; ?>
		              	@foreach($datapengguna as $tampilkan)
		                <tr class="gradeA">
		                  <td>{{ $no++ }}</td>
		                  <td>{{ $tampilkan->email }}</td>
		                  <td>{{ $tampilkan->name }}</td>
		                  <td>
		                  	@if($tampilkan->role == 1)
		                  	<span>Perawat</span>
		                  	@elseif($tampilkan->role == 2)
		                  	<span>Admin</span>
		                  	@else
		                  	<span>Dokter</span>
		                  	@endif
						  </td>
		                  <td>
		                  	<a href="#myEdit{{ $tampilkan->id }}" data-toggle="modal" class="btn btn-mini btn-info">Edit</a>
		                  	<a href="#myHapus{{ $tampilkan->id }}" data-toggle="modal" class="btn btn-mini btn-danger">Hapus</a>
		                  	
		                  	<!-- modal untuk edit penggguna -->
		                  	 <div id="myEdit{{ $tampilkan->id }}" class="modal hide">
				              <div class="modal-header">
				                <button data-dismiss="modal" class="close" type="button">×</button>
				                <h3>Perbarui Data Pengguna Atas Nama : {{ $tampilkan->name }}</h3>
				              </div>
				              <!-- form action -->
				              <form action="{{ url('/editpengguna') }}" method="post">
				              <div class="modal-body">
				              	<!-- buat form editnya didalam sini -->

				              </div>
				              <div class="modal-footer"> 
				              	<button class="btn btn-primary" href="{{ url('/editpengguna') }}">Hapus</button>
				              	<button data-dismiss="modal" class="btn" href="#">Batal</button>
				              </div>
				              </form>
				              <!-- end form action -->
				            
				            </div>

		                  	<!-- modal untuk hapus pengguna -->
		                  	 <div id="myHapus{{ $tampilkan->id }}" class="modal hide">
				              <div class="modal-header">
				                <button data-dismiss="modal" class="close" type="button">×</button>
				                <h3>Peringatan Sistem !</h3>
				              </div>
				              <div class="modal-body">
				                <p>Apakah anda yakin akan menghapus data dengan nama <b>{{ $tampilkan->name }}</b></p>
				              </div>
				              <div class="modal-footer"> <a class="btn btn-primary" href="{{ url('/deletepengguna') }}/Idanggota={{ $tampilkan->id }}">Hapus</a> <a data-dismiss="modal" class="btn" href="#">Batal</a> </div>
				            </div>

		                  </td>
		                </tr>
		                @endforeach
		              </tbody>
		            </table>
		        </div>
		        <!-- end class="widget-content nopadding" --> 	          


	        </div>
	      </div>
	    </div>

   </div>
  </div>

</div>

@endsection

@section('javascript')
	<script src="js/internalpakar/formpengguna.js"></script>
@endsection