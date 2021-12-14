@extends('layout.ceria')

@section('title', 'ABSEN')

@section('isikonten')

@section('judulhalaman', 'DETAIL ABSEN')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>
	<h2>Detail Absen</h2>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $p)
    <table>
        <tr>
            <td class = "tabel"> ID Pegawai </td>
            <td class = "tabel"> {{ $p->IDPegawai }} </td>
        </tr>
        <tr>
            <td class = "tabel"> Tanggal </td>
            <td class = "tabel"> {{ $p->Tanggal }} </td>
        </tr>
        <tr>
            <td class = "tabel"> Status </td>
            <td class = "tabel"> {{ $p->Status }}</td>
        </tr>
	</table>

	@endforeach

@endsection
