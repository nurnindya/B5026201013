<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function view()
    {
        // mengambil data dari table pegawai
        $absen = DB::table('absen')->get();

        // mengirim data pegawai ke view index
        return view('absen.awal', ['absen' => $absen]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function nambah()
    {
        // memanggil view tambah
        return view('absen.nambah');
    }

    // method untuk insert data ke table pegawai
    public function save(Request $request)
    {
        //DB::table()->insert();
        // insert data ke table pegawai
        DB::table('absen')->insert([
            'a_ID' => $request->ID,
            'a_IDPegawai' => $request->IDPegawai,
            'a_tanggal' => $request->tanggal,
            'a_status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }

    // method untuk edit data pegawai
    public function ngedit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('a_ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('absen.ngedit', ['absen' => $absen]);
    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('absen')->where('a_ID', $request->id)->update([
            'a_ID' => $request->ID,
            'a_IDPegawai' => $request->IDPegawai,
            'a_tanggal' => $request->tanggal,
            'a_status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('absen')->where('a_ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }

}
