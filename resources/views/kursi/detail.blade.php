@extends('layout.ceria')

@section('title', 'KURSI')

@section('isikonten')

@section('judulhalaman', 'DETAIL KURSII')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>
	<h2>Detail Kursi</h2>

	<a href="/kursi"> Kembali</a>

	<br/>
	<br/>

	@foreach($kursi as $k)
    <table>
        <tr>
            <td class = "tabel"> Merk Kursi </td>
            <td class = "tabel"> {{ $k->merkkursi }} </td>
        </tr>
        <tr>
            <td class = "tabel"> Stock Kursi </td>
            <td class = "tabel"> {{ $k->stockkursi }} </td>
        </tr>
        <tr>
            <td class = "tabel"> Tersedia </td>
            <td class = "tabel"> {{ $k->tersedia }} </td>
        </tr>
	</table>

	@endforeach

@endsection
