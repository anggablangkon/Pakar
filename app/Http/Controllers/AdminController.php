<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function datagejala()
    {
    	#parameter url
    	$pages = 'datagejala';

    	return view('admin/datagejala', compact('pages'));
    }

    public function datajeniskulit()
    {

        #parameter url
        $pages = 'datajeniskulit';
        #mengambil data jenis kulit
        $data  = DB::table('t_jeniskulit')->get();

        return view('admin/datajeniskulit', compact('pages', 'data'));

    }

    public function simpanjeniskulit(Request $request)
    {
        #parameter url
        $kode  = $request->kode;
        $nama  = $request->nama;

        #membuat kondisi untuk tidak ada data duplikat
        $data  = DB::table('t_jeniskulit')->where('kjeniskulit', $kode)->first();

        if($data == false){

            #memasukan data kedalam tabel
            $simpan= DB::table('t_jeniskulit')->insert([

                'id'            => NULL,
                'kjeniskulit'   => $kode,
                'njeniskulit'   => $nama,
                'cdate'         => date('d-M-Y'),
                'udate'         => '',
                'cby'           => Auth::user()->id,

            ]);

            if($simpan == true){
                return redirect('/datajeniskulit')->with('success', 'Data Jenis Kulit Berhasil Disimpan');
            }else{
                return redirect('/datajeniskulit')->with('failed', 'Data Jenis Kulit Tidak Berhasil Disimpan');
            }

        }else{
                return redirect('/datajeniskulit')->with('failed', 'Kode Jenis Kulit Telah Digunakan');
        }

    }

    public function deletejeniskulit($id)
    {
        
        #proses penghapusan data pada tabel
        $hapus = DB::table('t_jeniskulit')->where('kjeniskulit', $id)->delete();

        if($hapus == true){
            return redirect('/datajeniskulit')->with('success', 'Data Jenis Kulit Berhasil Dihapus');
        }else{
            return redirect('/datajeniskulit')->with('failed', 'Data Jenis Kulit Tidak Berhasil Dihapus');
        }
    }

    public function datapengguna()
    {
        #parameter url
        $pages = 'datapengguna';

        #mengambil data pengguna pada table
        $datapengguna = DB::table('users')->get();


        return view('admin/datapengguna', compact('pages', 'datapengguna'));

    }
}
