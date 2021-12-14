@extends('layout.ceria')

@section('title', 'MUTASI')

@section('isikonten')

@section('judulhalaman', 'EDIT MUTASI')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>

	<h3>Data Mutasi</h3>

	<a href="/mutasi/tambah"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>

    <div class="container" align="center">
        <form action="/mutasi/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Mutasi berdasarkan departemen .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div><br><br>
    <table border="1">
		<tr>
			<th class="tabel" style="width: 20%">ID Pegawai</th>
            <th class="tabel" style="width: 25%">Departemen</th>
            <th class="tabel" style="width: 20%">Sub Departemen</th>
            <th class="tabel" style="width: 15%">Mulai Bertugas</th>
            <th class="tabel" style="width: 20%">Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td class="tabel">{{ $m->IDPegawai }}</td>
			<td class="tabel">{{ $m->Departemen }}</td>
            <td class="tabel">{{ $m->SubDepartemen }}</td>
            <td class="tabel">{{ $m->MulaiBertugas }}</td>
			<td  class="tabel">
                <a href="/mutasi/view/{{ $m->IDPegawai  }}">View Detail</a>
                |
                <a href="/mutasi/edit/{{ $m->IDPegawai }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->IDPegawai }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


    @endsection
