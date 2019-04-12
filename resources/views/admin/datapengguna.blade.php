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
        <!-- content -->
        <div class="row-fluid">
	      <div class="span5">
	        <div class="widget-box">
	          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
	            <h5>Form Data Pengguna</h5>
	          </div>
	          <div class="widget-content nopadding">

	            <form class="form-horizontal" method="post" action="{{ url('/createdatapengguna') }}" name="basic_validate" id="basic_validate" novalidate="novalidate">
	              <div class="control-group">
	                <label class="control-label">Email Pengguna</label>
	                <div class="controls">
	                  <input type="email" class="span11" name="required" id="required">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Nama Penguna</label>
	                <div class="controls">
	                  <input type="text" class="span11" name="email" id="email">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Password</label>
	                <div class="controls">
	                  <input type="text" class="span11" name="date" id="date">
	                </div>
	              </div>
	              <div class="control-group">
	                <label class="control-label">Status Pengguna</label>
	                <div class="controls">
		                <select class="span11" name="jk" required>
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
		                  	<a href="" class="btn btn-mini btn-info">Edit</a>
		                  	<a href="" class="btn btn-mini btn-danger">Hapus</a>
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