@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DETAIL PEGAWAI')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>

	<h3>Detail Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
    <table>
        <tr>
            <td class = "tabel"> Nama </td>
            <td class = "tabel"> {{ $p->pegawai_nama }} </td>
        </tr>
        <tr>
            <td class = "tabel"> Jabatan </td>
            <td class = "tabel"> {{ $p->pegawai_jabatan }} </td>
        </tr>
        <tr>
            <td class = "tabel"> Umur </td>
            <td class = "tabel"> {{ $p->pegawai_umur }} </td>
        </tr> <tr>
            <td class = "tabel"> Alamat </td>
            <td class = "tabel"> {{ $p->pegawai_alamat }} </td>
        </tr>
	</table>


	@endforeach

@endsection
