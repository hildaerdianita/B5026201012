@extends('layout.ceria')

@section('title', 'KARYAWAN1')

@section('isikonten')

@section('judulhalaman', 'KARYAWAN1')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>

	<h2>Data Karyawan</h2>

	<a href="/karyawan1/tambah" class="btn btn-primary" > + Tambah Data</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
            <th class="tabel" style="width: 20%">NIP</th>
			<th class="tabel" style="width: 30%">Nama</th>
            <th class="tabel" style="width: 25%">Pangkat</th>
            <th class="tabel" style="width: 20%">Gaji</th>
            <th class="tabel" style="width: 10%">Opsi</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
            <td class="tabel">{{ $k->NIP }}</td>
			<td class="tabel">{{ $k->Nama }}</td>
			<td class="tabel">{{ $k->Pangkat }}</td>
			<td  class="tabel"> {{ $k->Gaji }}</td>
            <td  class="tabel">
				<a href="/absen/hapus/{{ $k->NIP }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    @endsection
