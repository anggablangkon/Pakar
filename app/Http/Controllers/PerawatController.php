<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerawatController extends Controller
{
    public function pendaftaranpasien()
    {
    	#parameter url
    	$pages = 'pendaftaranpasien';

    	return view('/perawat/pendaftaranpasien', compact('pages'));
    }
}
