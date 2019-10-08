<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($nama){
        // mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);
    }
}