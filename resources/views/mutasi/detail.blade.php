@extends('layout.ceria')

@section('title', 'MUTASI')

@section('isikonten')

@section('judulhalaman', 'DETAIL MUTASI')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>
	<h2>Detail Kursi</h2>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
    <table>
        <tr>
            <td class = "tabel"> ID Pegawai </td>
            <td class = "tabel"> {{ $m->IDPegawai }} </td>
        </tr>
        <tr>
            <td class = "tabel"> Departemen </td>
            <td class = "tabel"> {{ $m->Departemen }} </td>
        </tr>
        <tr>
            <td class = "tabel"> Sub Departemen </td>
            <td class = "tabel"> {{ $m->SubDepartemen }} </td>
        </tr>
        <tr>
            <td class = "tabel"> Mulai Bertugas </td>
            <td class = "tabel"> {{ $m->MulaiBertugas }} </td>
        </tr>
	</table>

	@endforeach

@endsection
