@extends('layout.ceria')

@section('title', 'PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH PEGAWAI')
<style>
    .tabel{
        padding: 10px ;
        border: 1 px solid black;
    }
</style>

	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>
        <form action="/pegawai/store" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td class="tabel"> Nama </td>
                    <td class="tabel"> <input type="text" name="nama" required="required"> </td>
                </tr>
                <tr>
                    <td class="tabel"> Jabatan </td>
                    <td class="tabel"> <input type="text" name="jabatan" required="required"> </td>
                </tr>
                <tr>
                    <td class="tabel"> Umur </td>
                    <td class="tabel"> <input type="number" name="umur" required="required"> </td>
                </tr>
                <tr>
                    <td class="tabel"> Alamat </td>
                    <td class="tabel"> <textarea name="alamat" required="required"></textarea> </td>
                </tr>
            </table>
        </table>
		<input type="submit" value="Simpan Data">
        </form>


@endsection

