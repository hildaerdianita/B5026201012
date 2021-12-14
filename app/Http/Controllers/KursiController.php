<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KursiController extends Controller
{
    public function index()
    {
        // mengambil data dari table kursi
        //$kursi = DB::table('kursi')->get();
        $kursi = DB::table('kursi')->paginate(5) ;

        // mengirim data kursi ke view index
        return view('kursi.index', ['kursi' => $kursi]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table kursi sesuai pencarian data
		$kursi = DB::table('kursi')
		->where('merkkursi','like',"%".$cari."%")
		->paginate(5);

    		// mengirim data kursi ke view index
		return view('kursi.index',['kursi' => $kursi]);

	}

    // method untuk menampilkan view form tambah kursi
    public function tambah()
    {

        // memanggil view tambah
        return view('kursi.tambah');
    }

    // method untuk insert data ke table kursi
    public function store(Request $request)
    {
        // insert data ke table mutasi
        DB::table('kursi')->insert([
            'merkkursi' => $request->merk,
            'stockkursi' => $request->stock,
            'tersedia' => $request->tersedia,

        ]);
        // alihkan halaman ke halaman kursi
        return redirect('/kursi');
    }
    // method untuk edit data kursi
    public function edit($id)
    {
        // mengambil data kursi berdasarkan id yang dipilih
        $kursi = DB::table('kursi')->where('kodekursi', $id)->get();
        // passing data kursi yang didapat ke view edit.blade.php
        return view('kursi.edit', ['kursi' => $kursi]);
    }
    // method untuk melihat detail data pegawai
    public function detail($id)
    {
        // mengambil data kursi berdasarkan id yang dipilih
        $kursi = DB::table('kursi')->where('kodekursi', $id)->get();
        // passing data kursi yang didapat ke view detail.blade.php
        return view('kursi.detail', ['kursi' => $kursi]);
    }
    // update data kursi
    public function update(Request $request)
    {
        // update data kursi
        DB::table('kursi')->where('kodekursi',$request->id)->update([
            'merkkursi' => $request->merk,
            'stockkursi' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman kursi
        return redirect('/kursi');
    }

    // method untuk hapus data kursi
    public function hapus($id)
    {
        // menghapus data kursi berdasarkan id yang dipilih
        DB::table('kursi')->where('kodekursi', $id)->delete();

        // alihkan halaman ke halaman kursi
        return redirect('/kursi');
    }
}
