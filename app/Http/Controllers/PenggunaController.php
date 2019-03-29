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
    	return view('/admin/index');
    }
}
