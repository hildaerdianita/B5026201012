@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT PEGAWAI')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <table>
            <tr><input type="hidden" name="id" value="{{ $p->pegawai_id }}"></tr>
            <tr>
                <td class="tabel"> Nama </td>
                <td class="tabel"> <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> </td>
            </tr>
            <tr>
                <td class="tabel"> Jabatan </td>
                <td class="tabel"> <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> </td>
            </tr>
            <tr>
                <td class="tabel"> Umur </td>
                <td class="tabel"> <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> </td>
            </tr>
            <tr>
                <td class="tabel"> Alamat </td>
                <td class="tabel"> <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> </td>
            </tr>
        </table>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
