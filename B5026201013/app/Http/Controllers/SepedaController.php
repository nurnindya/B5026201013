<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        //$pegawai = DB::table('pegawai')->get();
        $sepeda = DB::table('sepeda')->paginate(5);

        // mengirim data pegawai ke view index
        return view('sepeda.index', ['sepeda' => $sepeda]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('sepeda.tambah');
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        //DB::table()->insert();
        // insert data ke table pegawai
        DB::table('sepeda')->insert([
            'kodesepeda' => $request->kode,
            'merksepeda' => $request->merk,
            'stocksepeda' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/sepeda');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $sepeda = DB::table('sepeda')->where('kodesepeda', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('sepeda.edit', ['sepeda' => $sepeda]);
    }

    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $sepeda = DB::table('sepeda')->where('kodesepeda', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('sepeda.detail', ['sepeda' => $sepeda]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('sepeda')->where('kodesepeda', $request->kode)->update([
            'merksepeda' => $request->merk,
            'stocksepeda' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/sepeda');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('sepeda')->where('kodesepeda', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/sepeda');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepeda = DB::table('sepeda')
		->where('kodesepeda','like',"%".$cari."%")
        ->orWhere('merksepeda','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('sepeda.index',['sepeda' => $sepeda]);

	}
}
