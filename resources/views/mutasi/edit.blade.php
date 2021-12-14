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

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

    @foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
        <table>
            <tr><input type="hidden" name="id" value="{{ $m->ID }}"></tr>
            <tr>
                <td class="tabel"> ID Pegawai </td>
                <td class="tabel"> <input type="number" required="required" name="idpegawai" value="{{ $m->IDPegawai }}"></td>
            </tr>
            <tr>
                <td class="tabel"> Departemen </td>
                <td class="tabel"> <input type="text" required="required" name="departemen" value="{{ $m->Departemen }}"> </td>
            </tr>
            <tr>
                <td class="tabel"> Sub Departemen </td>
                <td class="tabel"> <input type="text" required="required" name="subdepartemen" value="{{ $m->SubDepartemen }}"> </td>
            </tr>
            <tr>
                <td class="tabel"> Mulai Bertugas </td>
                <td class="tabel"> <input type="datetime" required="required" name="mulaibertugas" value="{{ $m->MulaiBertugas }}"> </td>
            </tr>
        </table>
		<input type="submit" value="Simpan Data">
	</form>

	@endforeach


 @endsection

