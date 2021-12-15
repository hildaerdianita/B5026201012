@extends('layout.ceria')

@section('title', 'KARYAWAN1')

@section('isikonten')

@section('judulhalaman', 'TAMBAH KARYAWAN1')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>

	<h3>Data Karyawan</h2>

	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

    <form action="/karyawan1/store" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td class="tabel"> NIP </td>
                <td class="tabel"> <input type="text" name="nip" required="required"> </td>
            </tr>
            <tr>
                <td class="tabel"> Nama </td>
                <td class="tabel"> <input type="text" name="nama" required="required"> </td>
            </tr>
            <tr>
                <td class="tabel"> Pangkat  </td>
                <td class="tabel"> <input type="text" name="pangkat" required="required"> </td>
            </tr>
            <tr>
                <td class="tabel"> Gaji  </td>
                <td class="tabel"> <input type="number" name="gaji" required="required"> </td>
            </tr>
        </table>
        <input type="submit" value="Simpan Data">
        </form>

    </form>

    @endsection
