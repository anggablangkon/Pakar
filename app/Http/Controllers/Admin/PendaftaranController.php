<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use View;
use DB;

class PendaftaranController extends Controller
{
    public function buktipendaftaran($id)
    {
    	#mengambil data anggota 
    	$data 	= DB::table('t_dataanggota')->where('noanggota', $id)->first();	

    	#membuat bukti pendaftaran anggota baru
		$pdf 	=  PDF::loadView('berkas.buktipendaftaran',  compact('data'));
		 
		return $pdf->stream();

    }

    public function idcard($id)
    {
    	#mengambil data anggota 
    	$data 	= DB::table('t_dataanggota')->where('noanggota', $id)->first();	

    	#membuat bukti pendaftaran anggota baru
		$pdf 	=  PDF::loadView('berkas.idcard',  compact('data'));
		 
		return $pdf->stream();
    }
}
