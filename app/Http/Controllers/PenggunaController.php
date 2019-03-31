<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{

	#membuat hak akses pengguna controller
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	#parameter url
    	$pages = 'index';

    	return view('/admin/index', compact('pages'));
    }

}
