<html>
    <head>
    <meta charset="utf-8">
    <title>Form Pendaftaran Kuota Internet</title>
    <style type="text/css">

        body{background: #32cbf1;}
        p{text-align: left;
        margin-left: 10px;
        font-size: 12px;
        font-family:Verdana, Arial, Helvetica, sans-serif;}

        h1{text-align:center;
        margin-bottom: 30px;}

        form{
          background-color: rgb(255,255,255,0.7);
          width: 700px;
          height: 500px;
          margin: 40px auto;
          padding: 3px;
          text-align: left;
          border-radius: 40px 10px;
          box-shadow: 2px 2px 7px #393939;}

        form li {
            list-style: none;
            text-align: left;
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 100px;}

        form ul li label{
            float: left;
            clear: left;
            width: 150px;
            text-align: right;
            margin-right: 10px;
            font-family:Verdana, Arial, Helvetica, sans-serif;
            font-size:14px;}

        form ul li input, select, span {
            float: left;
            margin-bottom: 30px;}


        [type="submit"] {
            clear: left;
            margin-left: 0px ;
            font-size:18px;
            background: #3498db;
            color:whitesmoke;
            border: 0;
            padding: 5px 8px;}

        [type="reset"] {
            clear: right;
            margin-left: 300px;
            font-size:18px;
            background: #4bfd87;
            color:whitesmoke;
            border: 0;
            padding: 5px 8px;}
</style>

<script>

    //Validasi nama
    function nama_validation(){
        'use strict';
        var nama_name = document.getElementById("nama");
        var nama_value = document.getElementById("nama").value;
        var nama_length = nama_value.length;
        var letters = /^[a-zA-Z]+$/;
        if(!nama_value.match(letters|| nama_length<1 ))
        {
            document.getElementById('nama_err').innerHTML = 'Nama Mahasiswa harus alphabet dan tidak boleh hanya 1 huruf';
            name_name.focus();
            document.getElementById('nama_err').style.color = "#FF0000";
        }
        else
        {
            document.getElementById('nama_err').innerHTML = 'Nama valid';
            document.getElementById('nama_err').style.color = "#00AF33";
        }
    }

    //validasi nrp
    function nrp_validation(){
        'use strict';
        var numbers = /^[0-9]+$/;
        var nrp_name = document.getElementById("nrp");
        var nrp_value = document.getElementById("nrp").value;
        var nrp_length = nrp_value.length;
        if(!nrp_value.match(numbers) || nrp_length !== 10)
        {
            document.getElementById('nrp_err').innerHTML = 'NRP mahasiswa harus angka dan 10 digit';
            nrp_name.focus();
            document.getElementById('nrp_err').style.color = "#FF0000";
        }
        else
        {
            document.getElementById('nrp_err').innerHTML = 'NRP valid';
            document.getElementById('nrp_err').style.color = "#00AF33";
        }
    }

    // validasi jurusan
    function jurusan_validation(){
        'use strict';
        var jurusan_name = document.getElementById("jurusan");
        var jurusan_value = document.getElementById("jurusan").value;
        if(jurusan_value === "Default" || jurusan_value === "--")
        {
            document.getElementById('jurusan_err').innerHTML = 'Anda harus mengisi jurusan';
            jurusan_name.focus();
            document.getElementById('jurusan_err').style.color = "#FF0000";
        }
        else
        {
            document.getElementById('jurusan_err').innerHTML = 'Jurusan telah dipilih';
            document.getElementById('jurusan_err').style.color = "#00AF33";
        }
    }

    //validasi hp
    function hp_validation(){
        'use strict';
        var numbers = /^[0-9]+$/;
        var hp_name = document.getElementById("hp");
        var hp_value = document.getElementById("hp").value;
        var hp_length = hp_value.length;
        if(!hp_value.match(numbers) || hp_length <= 10)
        {
            document.getElementById('hp_err').innerHTML = 'Nomor Handphone harus angka dan minimal 10 digit';
            hp_name.focus();
            document.getElementById('hp_err').style.color = "#FF0000";
        }
        else
        {
            document.getElementById('hp_err').innerHTML = 'Nomor Handphone berhasil dimasukkan';
            document.getElementById('hp_err').style.color = "#00AF33";
        }
    }

    //validasi kirim
    function kirim_validation(){
        'use strict';
        var nama = document.getElementById("nama").value;
        var nrp = document.getElementById("nrp").value;
		var jurusan = document.getElementById("jurusan").value;
		var hp = document.getElementById("hp").value;
		if (nama != "" && nrp!="" && jurusan !="" && hp!="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}

    </script>

</head>
<body>


    <form action="https://www.w3schools.com/" method="POST" onSubmit="kirim_validation()">
    <form name='form pendaftaran'>
        <P>Hilda Erdianita Sugianto</P>
        <P>Hilda</P>
        <P>5026201012</P>
        <h1>Form Pendaftaran Kuota Internet</h1>
        <ul>
            <li><label for="nama">Nama Mahasiswa:</label></li>
            <li><input type="text" name="nama" id="nama" size="30"  onBlur="nama_validation();" /><span id="nama_err"></span></li>
            <li><label for="nrp">NRP Mahasiswa:</label></li>
            <li><input type="text" name="nrp" id="nrp" size="30" onBlur="nrp_validation();" /><span id="nrp_err"></span></li>
            <li><label for="jurusan">Data Jurusan:</label></li>
            <li><select id="jurusan" name="jurusan"  onBlur="jurusan_validation();">
                <option selected="" value="Default">(Pilih Jurusan Anda!)</option>
                <option value="--">none</option>
                <option value="SI">Sistem Informasi</option>
                <option value="El">Elektro</option>
                <option value="IN">Informatika</option>
            </select><span id="jurusan_err"></span></li>
            <li><label for="hp">Nomor Handphone :</label></li>
            <li><input type="text" name="hp" id="hp" size="30" onBlur="hp_validation();" /><span id="hp_err"></span></li>
            <li><input type="submit" name="submit" value="Kirim"  onBlur="kirim_validation();" /></li>
            <li><input type="reset" name="reset" value="Reset"  /></li>
        </ul>
    </form>
</body>
</html>
