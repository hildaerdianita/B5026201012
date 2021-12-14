@extends('layout.ceria')

@section('title', 'MUTASI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH MUTASI')

<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>
	<h3>Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
        <table>
            <tr>
                <td class="tabel"> ID Pegawai </td>
                <td class="tabel"> <input type="number" name="idpegawai" required="required"> </td>
            </tr>
            <tr>
                <td class="tabel"> Departemen  </td>
                <td class="tabel"> <input type="text" name="departemen" required="required"> </td>
            </tr>
            <tr>
                <td class="tabel"> Sub Departemen  </td>
                <td class="tabel"> <input type="text" name="subdepartemen" required="required"> </td>
            </tr>
            <tr>
                <td class="tabel"> Mulai Bertugas  </td>
                <td class="tabel"> <input type="datetime" name="mulaibertugas" required="required"> </td>
            </tr>
        </table>
        <input type="submit" value="Simpan Data">
	</form>

    @endsection
