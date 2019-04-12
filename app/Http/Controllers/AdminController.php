<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    public function datapengguna()
    {
        #parameter url
        $pages = 'datapengguna';

        #mengambil data pengguna pada table
        $datapengguna = DB::table('users')->get();


        return view('admin/datapengguna', compact('pages', 'datapengguna'));

    }
}
