@extends('layout.ceria')

@section('title', 'MUTASI')

@section('isikonten')

@section('judulhalaman', 'EDIT MUTASI')
	<h2>Tugas PBW Query Builder</h2>
	<h3>Data Mutasi</h3>

	<a href="/mutasi/tambah"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td>{{ $m->IDPegawai }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->IDPegawai }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->IDPegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


    @endsection
