@extends('layout.ceria')

@section('title', 'KURSI')

@section('isikonten')

@section('judulhalaman', 'KURSI')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>

	<h2>Data Kursi</h2>

	<a href="/kursi/tambah"> + Tambah Kursi Baru</a>

	<br/>
	<br/>


    <div class="container" align="center">
        <form action="/kursi/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Kursi berdasarkan merk .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>

	<table border="1">
		<tr>
			<th class="tabel" style="width: 25%">Merk Kursi</th>
            <th class="tabel" style="width: 20%">Stock Kursi</th>
            <th class="tabel" style="width: 15%">Opsi</th>
		</tr>
		@foreach($kursi as $k)
		<tr>
			<td class="tabel">{{ $k->merkkursi }}</td>
			<td class="tabel">{{ $k->stockkursi }}</td>
			<td  class="tabel">
                <a href="/kursi/view/{{ $k->kodekursi }}">View Detail</a>
                |
				<a href="/kursi/edit/{{ $k->kodekursi }}">Edit</a>
				|
				<a href="/kursi/hapus/{{ $k->kodekursi }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $kursi->links() }}
    @endsection
