<!DOCTYPE html>
<html>
<head>
	<title>Tugas PBW Query Builder</title>
</head>
<body>

	<h2>Tugas PBW Query Builder/5026201012</h2>
	<h3>Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->IDPegawai }}"> <br/>
		ID Pegawai <input type="number" required="required" name="idpegawai" value="{{ $m->IDPegawai }}"> <br/>
		Departemen <input type="text" required="required" name="departemen" value="{{ $m->Departemen }}"> <br/>
		Sub Departemen <input type="text" required="required" name="subdepartemen" value="{{ $m->SubDepartemen }}"> <br/>
		Mulai Bertugas <input type="datetime" required="required" name="mulaibertugas" value="{{ $m->MulaiBertugas }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>

</body>
</html>
