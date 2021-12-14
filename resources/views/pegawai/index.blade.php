@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>

<h3>Data Pegawai</h3>
<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
<br>

    <div class="container" align="center">
        <form action="/pegawai/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai berdasarkan nama atau alamat .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div><br><br>

	<table border="1">
		<tr>
			<th class="tabel" style="width: 25%">Nama</th>
            <th class="tabel" style="width: 20%">Alamat</th>
            <th class="tabel" style="width: 15%">Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td class="tabel">{{ $p->pegawai_nama }}</td>
			<td class="tabel">{{ $p->pegawai_alamat }}</td>
			<td  class="tabel">
                <a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $pegawai->links() }}
@endsection
