<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p style="font-size:12px;"><b>Formulir Pendaftaran Anggota Pasien Baru</b><br/>Klinik Boungenvile Ciekek Pandeglang</p>
<hr>
<br/>
<center>
	<img src="https://i2.wp.com/www.tipssehatcantik.com/wp-content/uploads/2017/07/logo-bpjs2-e1505609707779.jpg?fit=300%2C83&ssl=1"> 
	<h3>BUKTI PENDAFTARAN PASIEN ANGGOTA BARU</h3>
	<hr/>
<table style="font-size:18px;" align="center">
	<thead>
		
	</thead>
	<thead>
		<tr>
			<td>No Anggota</td>
			<td>:</td>
			<td>Sp-0{{ $data->noanggota }}</td>
		</tr>
		<tr>
			<td>Nama Anggota</td>
			<td>:</td>
			<td>{{ $data->nama }}</td>
		</tr>
		<tr>
			<td>Tanggal Pendaftaran</td>
			<td>:</td>
			<td>{{ $data->cdate }}</td>
		</tr>
		<tr>
			<td>Usia</td>
			<td>:</td>
			<td>{{ $data->tgl_lahir }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td> {{ $data->alamat }} </td>
		</tr>
	</thead>

</table>

	<h3>Terimakasih Kami Ucapkan</h3>
	

</center>



</body>
</html>