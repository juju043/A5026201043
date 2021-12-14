<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SandalController extends Controller
{
    //indexing data sandal
    public function index()
    {
        //DB::table('') -> get(); //mengembalikan array of object[][]

        // mengambil data dari table sandal
        $sandal = DB::table('sandal')->paginate(5);

        // mengirim data sandal ke view index
        return view('sandal.index', ['sandal' => $sandal]); //passing value lebih dari 1

    }

    //fungsi search
    public function cari(Request $request)
	{
		$cari = $request->cari;
		$sandal = DB::table('sandal')
		->where('merksandal','like',"%".$cari."%")
		->paginate(5);
		return view('sandal.index',['sandal' => $sandal]);
	}

    //fungsi tambah
    public function tambah()
    {
	    // memanggil view tambah
	    return view('sandal.tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table sandal
        DB::table('sandal')->insert([
            'merksandal' => $request->merk,
            'stocksandal' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman sandal
        return redirect('/sandal');
    }

     // method untuk edit data sandal
     public function edit($id)
     {
         // mengambil data sandal berdasarkan id yang dipilih
         $sandal = DB::table('sandal')->where('kodesandal',$id)->get();
         // passing data sandal yang didapat ke view edit.blade.php
         return view('sandal.edit',['sandal' => $sandal]);
     }

    //method untuk update data sandal
    public function update(Request $request)
    {
        // update data sandal
        DB::table('sandal')->where('kodesandal',$request->id)->update([
            'merksandal' => $request->merk,
            'stocksandal' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman sandal
        return redirect('/sandal');
    }

    // method untuk hapus data sandal
    public function hapus($id)
    {
        // menghapus data sandal berdasarkan id yang dipilih
        DB::table('sandal')->where('kodesandal',$id)->delete();
        // alihkan halaman ke halaman sandal
        return redirect('/sandal');
    }

    public function view($id){
        $penggaris = DB::table('sandal')->where('kodesandal',$id)->get();
        return view('sandal.detail',['sandal' => $penggaris]);
        }
}
