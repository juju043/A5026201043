<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Karyawan1Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan1
    	$karyawan1 = DB::table('karyawan1')->get();

    	// mengirim data karyawan1 ke view index
    	return view('karyawan1.index',['karyawan1' => $karyawan1]);

    }
    public function tambah()
    {
        // menambah karyawan
        return view('karyawan1.tambah');
    }
    public function store(Request $request)
    {
        // insert data ke table karyawan
        DB::table('karyawan1')->insert([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan1');
    }
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan1')->where('NIP',$id)->delete();

        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan1');
    }
}
