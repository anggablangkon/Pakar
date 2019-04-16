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
    	$pages         = 'pendaftaranpasien';

        #digunakan untuk menampilkan data pasien di seetingan 0 untuk default
        $datapasien    = DB::table('t_dataanggota')->where('noanggota', '0')->first();
        
    	return view('/perawat/pendaftaranpasien', compact('pages', 'datapasien'));
    }

    public function pendaftaranpasienbaru()
    {
    	#arameter url
    	$pages         = 'pendaftaranpasienbaru';

        #membuat no anggota
        $noanggota     = DB::table('t_dataanggota')->orderBy('noanggota', 'Desc')->first();
        $noanggota     = $noanggota->noanggota+1;

        #memanggil data anggota yang mendaftar untuk rincian pendaftaran
        $dataanggota   = DB::table('t_dataanggota')->where('noanggota', Session::get('pendaftarananggota'))->first();
        
        $detailanggota = DB::table('t_dataanggota')->where('cdate', date('d-M-Y'))->get();


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
        $noanggota      = $noanggota;

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

    public function pencarianpasien(Request $request)
    {
        #parameter url
        $pages         = 'pendaftaranpasien';
        $id            = $request->nopasien;

        //menamngkap id 
        $id            = substr($id, 4,5);
        
        #digunakan untuk menampilkan data pasien
        $datapasien    = DB::table('t_dataanggota')->where('noanggota', $id)->first();

        #menampilkan rekap pengobatan 
        // $rekappengobatan = DB::table('t_rekappengobatan')->where('noanggota', $id)->get();
        
        if($datapasien == true)
        {
            return view('/perawat/pendaftaranpasien', compact('pages', 'datapasien', 'rekappengobatan'));
        }else{
            return redirect('/pendaftaranpasien')->with('failed', 'Maaf! Data yang dicari tidak ditemukan');
        }
    }

    public function rekappasistemterdaftar()
    {
        #parameter url
        $pages        = 'rst';
        $datarekap    = DB::table('t_dataanggota')->where('jk', ['P','W'])->get();

        return view('/perawat/pasienterdaftar', compact('pages', 'datarekap'));
    }

    public function deleteanggota($id)
    {

        #digunakan untuk menghapus data
        DB::table('t_dataanggota')->where('noanggota', $id)->delete();

        return redirect('/rekappasistemterdaftar')->with('success', 'Data berhasil dihapus');

    }
}
