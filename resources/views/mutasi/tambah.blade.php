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

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Departemen <input type="text" name="departemen" required="required"> <br/>
		Sub Departemen <input type="text" name="subdepartemen" required="required"> <br/>
		Mulai Bertugas <input type="datetime" name="mulaibertugas" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
