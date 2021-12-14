<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
          font-family: "Lato", sans-serif;

        }

        .sidebar {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: rgb(78, 36, 8);
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidebar a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #f5cdbb;
          display: block;
          transition: 0.3s;
        }

        .sidebar a:hover {
          color: #f1f1f1;
        }

        .sidebar .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }
        .header {
          font-size: 14px;
          background-color: rgb(247, 212, 188);
          color: rgb(24, 21, 21);
          padding: 10px 15px;
          border: none;
          text-align: center;
        }
        .footer {
          font-size: 14px;
          background-color: rgb(247, 212, 188);
          color: rgb(24, 21, 21);
          padding: 10px 15px;
          border: none;
          text-align: center;
        }

        .openbtn {
          font-size: 20px;
          cursor: pointer;
          background-color: rgb(78, 36, 8);
          color: white;
          padding: 10px 15px;
          border: none;
        }

        .openbtn:hover {
          background-color: #444;
        }

        #main {
          transition: margin-left .5s;
          padding: 16px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }
        </style>
        </head>
        <body class="container m-4">

        <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          <a href="http://127.0.0.1:8000/pegawai">Pegawai</a>
          <a href="http://127.0.0.1:8000/absen">Absen</a>
          <a href="http://127.0.0.1:8000/mutasi">Mutasi</a>
          <a href="http://127.0.0.1:8000/kursi">Kursi</a>
          <a href="#">P</a>
        </div>

        <div id="main">
            <div class="container">

                    <div class="header">
                            <img src="{{url('fotodiri.jpeg')}}" alt="Image" width="90" height="120" />
                            <p>5026201012-Hilda Erdianita Sugianto</p>
                    </div><hr>

          <button class="openbtn" onclick="openNav()">☰ Menu </button>
          @section('isikonten')
          @show
          <br><br><br><br><hr>
          <div class ="footer">
            <p>Hak Cipta oleh 5026201012-Hilda Erdianita Sugianto</p>
          </div>

        </div>

        <script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
        </script>

</body>
</html>




