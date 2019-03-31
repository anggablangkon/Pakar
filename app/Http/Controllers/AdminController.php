<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
