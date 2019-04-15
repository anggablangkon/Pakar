<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PenggunaController extends Controller
{
    public function buatpengguna(Request $request)
    {
    	//membuat parameter untuk dimasukan kedalam tabel
    	$username 		= $request->username;
    	$nama 			= $request->nama;
    	$password		= $request->password;
    	$role 			= $request->role;

    	//membuat hashing password manual
    	$password 		= bcrypt($password);


    	//meyimpan kedalam database
    	$aksi = DB::table('users')->insert([

    		'id' 			 => NULL,
    		'name' 			 => $nama,
    		'email' 		 => $username,
    		'password'  	 => $password,
    		'remember_token' => '',
    		'created_at'	 => date("Y-m-d h:i:s"),
    		'updated_at'	 => date("Y-m-d h:i:s"),
    		'role' 			 => $role,

    	]); 

    	//membuat kondisi notifikasi
    	if($aksi == true)
    	{
    		return redirect('/datapengguna')->with('success', 'Data Penggguna Berhasil Ditambahkan');
    	}else{
    		return redirect('/datapengguna')->with('failed', 'Data Penggguna Gagal Ditambahkan');
    	}

    }

    public function editPengguna(Request $request, $id)
    {
        // parameter untuk proses edit
        $username       = $request->username;
        $nama           = $request->nama;
        $password       = $request->password;
        $role           = $request->role;

        //membuat hashing password manual
        $password       = bcrypt($password);

        $update = DB::table('users')->where('id', $id)->update([

            'name'           => $nama,
            'email'          => $username,
            'password'       => $password,
            'remember_token' => '',
            'created_at'     => date("Y-m-d h:i:s"),
            'updated_at'     => date("Y-m-d h:i:s"),
            'role'           => $role,

        ]);

        // membuat notfikasi update
        if ($update == true) {
            return redirect('/datapengguna')->with('success','Data Pengguna Berhasil Diedit');
            
        }else{
            return redirect('/datapengguna')->with('failed','Data Pengguna Gagal Diedit');

        }


    }



    public function deletedatapengguna($id)
    {
    	//menghpus data pengguna
    	$aksi	 			= DB::table('users')->where('id', $id)->delete();

    	//membuat kondisi notifikasi
    	if($aksi == true)
    	{
    		return redirect('/datapengguna')->with('success', 'Data Penggguna Berhasil Dihapus');
    	}else{
    		return redirect('/datapengguna')->with('failed', 'Data Penggguna Gagal Dihapus');
    	}
    }
}
