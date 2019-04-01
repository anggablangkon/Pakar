<?php

namespace App\Http\Controllers\Pendaftaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use View;

class PendaftaranController extends Controller
{
    public function buktipendaftaran($id)
    {
    	#membuat bukti pendaftaran anggota baru
		$pdf =  PDF:: loadView  (  'berkas.buktipendaftaran');
		 
		return $pdf->stream();

    }
}
