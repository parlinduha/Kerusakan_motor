<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Bootstrap -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->

  <script src="./Js/jam.js"></script>
</head>

<body style="background-color:darkgray" onload="realTimeClock()">

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <div style="color:antiquewhite;">
            <h5 >
            <?php
                        $time_sekarang = time();
                        echo date("d F Y", strtotime("+5 days", $time_sekarang));
                        ?>
            </h5>
            <label id="clock"></label>
            </div>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2 sidenav" style="background-color:darkgray; border-right: 1px solid #1C6EA4;">
        <p><a href="index.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
        <!-- <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block">DIAGNOSA KERUSAKAN</button></a></p> -->
        <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block">DAFTAR GEJALA </button></a></p>
        <p><a href="about.php"><button type="button" class="btn btn-primary btn-block active">ABOUT</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
        <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
      </div>
      <div class="col-sm-8">
        <center>
          <h2>ABOUT</h2>
        </center>
        <!-- Card -->
        <div class="row" style="float:left ; margin-top:20px;">
          <div class="col-sm-4">
            <img src="./image/a4.png" width="400" height="500"  alt="...">
          </div>
          <div class="col-sm-8" style="-webkit-box-shadow: 5px 5px 15px 5px #000000; 
box-shadow: 5px 5px 15px 5px #000000;">
            <b>
            <p style="font-family: Georgia, serif;
              font-size: 12px;
              letter-spacing: 2px;
              word-spacing: 1.6px;
              color: white;
              text-align:justify;
              margin-top:50px;
              margin-bottom:50px;
              font-weight: 700;
              text-decoration: rgb(68, 68, 68);
              font-style: normal;
              font-variant: normal;
              text-transform: capitalize;">
            Sistem Pakar adalah sistem berbasis komputer yang menggunakan pengetahuan, fakta, dan teknik penalaran dalam memecahkan masalah yang biasanya hanya dapat dipecahkan oleh seorang pakar dalam bidang tersebut. <br> Dalam kasus ini, sistem pakar juga dapat digunakan untuk mendiagnosis kerusakan untuk kendaraan bermotor. Sistem ini akan membantu customer untuk mengetahui jenis kerusakan sepeda motor. <br> Sistem pakar dapat memberikan jawaban atas masalah pada titik waktu yang konsisten bahkan jika mereka dapat mencapai kesimpulan lebih cepat dari pada pakar dalam beberapa kasus, sistem pakar terdiri dari dua bagian utama, lingkungan pengembangan dan lingkungan konsultasi. Lingkungan pengembangan digunakan untuk menggabungkan pengembangan pakar ke dalam lingkungan sistem pakar, <br> non ahli menggunakan lingkungan konsultasi untuk mendapatkan pengetahuan dan nasihat ahli. Saat ini kebanyakan sistem pakar tidak menyertakan bagian pengetahuan yang ditingkatkan sistem pakar adalah sistem yang berupaya memasukan pengetahuan manusia ke dalam komputer agar komputer dapat menyelesaikan masalah yang biasanya diselesaikan oleh pakar 
            </p>
            </b>

          </div>
        </div>
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Silahkan login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
            <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="container-fluid text-center" style="margin-top:5%; background-color:darkgray;">
  <div class="copyright">
                    Copyright © <span id="year"></span>  All rights reserved by
                    <a href="#" class="footer-i"><b>Adriana Rika </b></a>
                  </footer>
                </div>
                <script>
                  function getCurrentYear() {
                    return new Date().getFullYear(); // returns the year via local timing
                  }

                  document.getElementById("year").innerHTML = getCurrentYear();
                  //changing the inner html of the span with "year" id to the given year(2021)
                </script>

  <script>
    $(document).ready(function() {
      $("#myBtn").click(function() {
        $("#myModal").modal();
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $("#myBtn").click(function() {
        $("#myModal").modal();
      });
    });
  </script>

</body>

</html>