<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
        // mengambil data dari table kursi
        $karyawan1 = DB::table('karyawan1')->get();


        // mengirim data kursi ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }


    // method untuk menampilkan view form tambah kursi
    public function tambah()
    {

        // memanggil view tambah
        return view('karyawan1.tambah');
    }

    // method untuk insert data ke table kursi
    public function store(Request $request)
    {
        // insert data ke table mutasi
        DB::table('karyawan1')->insert([
            'NIP' => $request->nip,
            'Nama' => $request->nama,
            'Pangkat' => $request->pangkat,
            'Gaji' => $request->gaji,

        ]);
        // alihkan halaman ke halaman karyawan
        return redirect('/karyawan1');
    }

    // method untuk hapus data kursi
    public function hapus($id)
    {
        // menghapus data karyawan berdasarkan id yang dipilih
        DB::table('karyawan1')->where('NIP', $id)->delete();

        // alihkan halaman ke halaman karawan
        return redirect('/karyawan1');
    }
}
