<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;

class PerawatController extends Controller
{
    public function pendaftaranpasien()
    {
    	#parameter url
    	$pages = 'pendaftaranpasien';

    	return view('/perawat/pendaftaranpasien', compact('pages'));
    }

    public function pendaftaranpasienbaru()
    {
    	#arameter url
    	$pages         = 'pendaftaranpasienbaru';

        #membuat no anggota
        $noanggota     = DB::table('t_dataanggota')->orderBy('noanggota', 'Desc')->count();
        $noanggota     = $noanggota+1;

        #memanggil data anggota yang mendaftar untuk rincian pendaftaran
        $dataanggota   = DB::table('t_dataanggota')->where('noanggota', Session::get('pendaftarananggota'))->first();
        $detailanggota = DB::table('t_dataanggota')->get();


    	return view('/perawat/pendaftaranpasienbaru', compact('pages', 'noanggota', 'dataanggota', 'detailanggota'));
    }

    public function prosespendaftaranpasienbaru(Request $request)
    {
        #membuat parameter
        $noanggota      = $request->noanggota;
        $nama           = $request->nama;
        $jk             = $request->jk;
        $date           = $request->date;
        $alamat         = $request->alamat;

        #membuat no anggota
        $noanggota      = $noanggota+1;

        #menyimpan data kedalam tabel menggunakan query builder
        $simpan = DB::table('t_dataanggota')->insert([

            'noanggota'     => $noanggota,
            'nama'          => $nama,
            'jk'            => $jk,
            'tgl_lahir'     => $date,
            'alamat'        => $alamat,
            'cdate'         => date('d-M-Y'),
            'udate'         => '',
            'cby'           => Auth::user()->id,

        ]);

        #membuat session no anggota yang mendaftar
        if($simpan == true)
        {
            Session::put('pendaftarananggota', $noanggota);

            #membuat pesan bahwa proses penyimpanan berhasil
            return redirect('/pendaftaranpasienbaru')->with('success', 'Hallo! Selamat Data Pendaftaran Anggota Berhasil');
        }else{
            return redirect('/pendaftaranpasienbaru')->with('failed', 'Hallo! Data Pendaftaran Tidak Berhasil Dilakukan');
        }

    }
}
