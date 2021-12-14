@extends('layout.ceria')

@section('title', 'KURSI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH KURSI')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>

	<h3>Data Kursi</h2>

	<a href="/kursi"> Kembali</a>

	<br/>
	<br/>

    <form action="/kursi/store" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td class="tabel"> Merk Kursi </td>
                <td class="tabel"> <input type="text" name="merk" required="required"> </td>
            </tr>
            <tr>
                <td class="tabel"> Stock Kursi  </td>
                <td class="tabel"> <input type="number" name="stock" required="required"> </td>
            </tr>
            <tr>
                <td class="tabel"> Tersedia  </td>
                <td class="tabel">
                    <input type="radio" id="ada" name="tersedia" value="A">
                    <label for="ada">Tersedia</label><br>
                    <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
                    <label for="tidak">Tidak Tersedia</label><br> </td>
            </tr>
        </table>
        <input type="submit" value="Simpan Data">

    </form>

    @endsection
