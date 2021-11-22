<html>
    <head>
    <title>Menghitung Bilangan Faktorial menggunakan For pada PHP</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <style>
    body{
        background: #ff9966;
        font-size:18px;
        font-family: Tahoma, sans-serif;
        margin:0;
        padding:48px;}
    h2{
        text-align:center;
        color:#663300;}

    .container{
        max-width:480px;
        background-color:#ffffb3;
        margin:1px auto 1px;
        padding:24px;
        border-radius:8px;
        -webkit-border-radius:8px;
        -moz-border-radius:8px;
        box-shadow:0 4px 8px #000;
    }
    input{
        border-radius:8px;
        -webkit-border-radius:8px;
        -moz-border-radius:8px;
        font-size:18px;
        padding:8px 14px;
        margin:0 1px;
        border:1px solid #888;}

    .field{
        width:320px;}
    .tombol{
        color:white;
        background-color: #009900;}
    </style>
</head>

<body>
    <?php
    $n = isset($_GET['n']) ? $_GET['n'] : NULL;
    if(isset($_GET['submit'])){
        if($n!=NULL){
            $bil = 1;
            for($i=1;$i<=$n;$i++){
                $bil = $bil*$i;}

        }else{
            $bil = 'Mohon Masukkan Bilangan!';
        }
    }

    echo '<div class="container">';
    echo '<h2>Perhitungan Bilangan Faktorial</h2>';
    echo '<hr>';
    echo '<h4>Masukkan Bilangan :</h4>';
    echo '<form action="" method="get"  @csrf>';
    echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="      "/>';
    echo '<input class="tombol" type="submit" name="submit" value="Hitung"  />';
    echo '</form>';
    if((isset($n))and($n!=NULL)){
        echo '<h4>Hasil Faktorial :</h4>';
        echo '=> ';
        for($i=1;$i<$n;$i++){echo $i.'x';}
        echo $n;
        echo '<br/>';
    }
    echo '<h4>Jumlah Faktorial :</h4>';
    echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';

?>
</body>
</html>
