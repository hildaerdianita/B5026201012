<html>
<head>
    <title>Pemrograman Web B</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("button").click(function(){
    $(this).hide();
  });
});
</script>
</head>
<body>

    <div class="container ">
    <h2 class= "text-primary">Selamat Datang di Pengecekan Keuangan MyFinance</h2>
    </div>
    <div class="container text-success"><p>Ini adalah Website untuk mengetahui kesehatan keuangan Anda. Disini anda dapat mengisi beberapa pertanyaan sesuai dengan kondisi saat ini.  </p></div>
    <div class="container"> 1. Berapa umur Anda saat ini?</div>
    <div class="container">
        <button>Kurang dari 18 tahun</button>
        <button>18-30 tahun</button>
        <button>Lebih dari 30 tahun</button>
    </div><br>
    <div class="container"> 2. Apa pekerjaan Anda?</div>
    <div class="container">
        <button>Pelajar/Mahasiswa</button>
        <button>PNS/Karyawan Swata</button>
        <button>Pengusaha</button>
        <button>Lainnya</button>
    </div><br>
    <div class="container"> 3. Berapa range gaji Anda?</div>
    <div class="container">
        <button>Kurang dari 1.000.0000</button>
        <button>1.000.0000-5.000.000</button>
        <button>5.000.000-10.000.0000</button>
        <button>Lebih dari 10.000.0000</button>
    </div><br>
    <div class="container"> 4. Berapa tanggungan Anda?</div>
    <div class="container">
        <button>Tidak ada</button>
        <button>1-3</button>
        <button>Lebih dari 3</button>
    </div><br>
    <div class="container"> 5. Berapa presentase uang yang Anda sisihkan untuk ditabung/diinvestasikan?</div>
    <div class="container">
        <button>Tidak ada</button>
        <button>10%-30%</button>
        <button>30%-50%</button>
        <button>Diatas 50%</button>
    </div><br>
    <div class="container"> 6. Apakah Anda memiliki dana darurat?</div>
    <div class="container">
        <button>Tidak ada</button>
        <button>Ada</button>
    </div><br>
    <div class="container">7. Apakah Anda memiliki Hutang/cicilan?</div>
    <div class="container">
        <button>Tidak ada</button>
        <button>Ada</button>
    </div><br>
    <div class="container">
        <div class="card-header bg-danger text-white">Terima kasih karena telah mengisi pertanyaan tersebut!</div>
        <div class="card-body bg-info text-dark">Untuk dapat mengetahui hasil dari kondisi keuangan Anda, Silahkan tunggu email dari kami  </div>
        <div class="card-footer bg-success text-white">Semoga membantu! </div>
    </div>
    <br>
    <br>
</div>

</body>
</html>
