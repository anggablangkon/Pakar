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

    public function datatindakan()
    {
        #parameter url
        $pages = 'datatindakan';
        #mengambil data jenis kulit
        $data  = DB::table('t_tindakan')->get();

        return view('/admin/datatindakan', compact('pages','data'));
    }

    public function datacream()
    {
        #parameter url
        $pages = 'datacream';
        #mengambil data jenis kulit
        $data  = DB::table('t_jeniscream')->get();

        return view('/admin/datacream', compact('pages', 'data'));
    }

    public function datakerusakankulit()
    {
        #parameter url
        $pages = 'datakerusakankulit';
        #mengambil data jenis kulit
        $data  = DB::table('t_kerusakankulit')->get();

        return view('/admin/datakerusakankulit', compact('pages', 'data'));
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

    public function simpantindakan(Request $request)
    {
        #parameter url
        $kode  = $request->kode;
        $nama  = $request->nama;

        #membuat kondisi untuk tidak ada data duplikat
        $data  = DB::table('t_tindakan')->where('ktindakan', $kode)->first();

        if($data == false){

            #memasukan data kedalam tabel
            $simpan= DB::table('t_tindakan')->insert([

                'id'            => NULL,
                'ktindakan'     => $kode,
                'ntindakan'     => $nama,
                'cdate'         => date('d-M-Y'),
                'udate'         => '',
                'cby'           => Auth::user()->id,

            ]);

            if($simpan == true){
                return redirect('/datatindakan')->with('success', 'Data Tindakan Treatment Berhasil Disimpan');
            }else{
                return redirect('/datatindakan')->with('failed', 'Data Tindakan Treatment Tidak Berhasil Disimpan');
            }

        }else{
                return redirect('/datatindakan')->with('failed', 'Kode Tindakan Treatment Kulit Telah Digunakan');
        }

    }

     public function simpandatacream(Request $request)
    {
        #parameter url
        $kode  = $request->kode;
        $nama  = $request->nama;

        #membuat kondisi untuk tidak ada data duplikat
        $data  = DB::table('t_jeniscream')->where('kcream', $kode)->first();

        if($data == false){

            #memasukan data kedalam tabel
            $simpan= DB::table('t_jeniscream')->insert([

                'id'            => NULL,
                'kcream'        => $kode,
                'ncream'        => $nama,
                'cdate'         => date('d-M-Y'),
                'udate'         => '',
                'cby'           => Auth::user()->id,

            ]);

            if($simpan == true){
                return redirect('/datacream')->with('success', 'Data Cream Berhasil Disimpan');
            }else{
                return redirect('/datacream')->with('failed', 'Data Cream Tidak Berhasil Disimpan');
            }

        }else{
                return redirect('/datacream')->with('failed', 'Kode Cream Kulit Telah Digunakan');
        }

    }

    public function simpankerusakankulit(Request $request)
    {
        #parameter url
        $kode  = $request->kode;
        $nama  = $request->nama;

        #membuat kondisi untuk tidak ada data duplikat
        $data  = DB::table('t_kerusakankulit')->where('kkerusakankulit', $kode)->first();

        if($data == false){

            #memasukan data kedalam tabel
            $simpan= DB::table('t_kerusakankulit')->insert([

                'id'                => NULL,
                'kkerusakankulit'   => $kode,
                'nkerusakankulit'   => $nama,
                'cdate'             => date('d-M-Y'),
                'udate'             => '',
                'cby'               => Auth::user()->id,

            ]);

            if($simpan == true){
                return redirect('/datakerusakankulit')->with('success', 'Data Kerusakan Kulit Berhasil Disimpan');
            }else{
                return redirect('/datakerusakankulit')->with('failed', 'Data Kerusakan Kulit Tidak Berhasil Disimpan');
            }

        }else{
                return redirect('/datakerusakankulit')->with('failed', 'Kode Kerusakan Kulit Telah Digunakan');
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

    public function deletekerusakankulit($id)
    {
        
        #proses penghapusan data pada tabel
        $hapus = DB::table('t_kerusakankulit')->where('kkerusakankulit', $id)->delete();

        if($hapus == true){
            return redirect('/datakerusakankulit')->with('success', 'Data Kerusakan Kulit Berhasil Dihapus');
        }else{
            return redirect('/datakerusakankulit')->with('failed', 'Data Keruskan Kulit Tidak Berhasil Dihapus');
        }
    }

    public function deletetindakan($id)
    {
        
        #proses penghapusan data pada tabel
        $hapus = DB::table('t_tindakan')->where('ktindakan', $id)->delete();

        if($hapus == true){
            return redirect('/datatindakan')->with('success', 'Data Tindakan Treatment Berhasil Dihapus');
        }else{
            return redirect('/datatindakan')->with('failed', 'Data Tindakan Treatment Tidak Berhasil Dihapus');
        }
    }

    public function deletecream($id)
    {
        
        #proses penghapusan data pada tabel
        $hapus = DB::table('t_jeniscream')->where('kcream', $id)->delete();

        if($hapus == true){
            return redirect('/datacream')->with('success', 'Data Jenis Cream Berhasil Dihapus');
        }else{
            return redirect('/datacream')->with('failed', 'Data Jenis Cream Tidak Berhasil Dihapus');
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
