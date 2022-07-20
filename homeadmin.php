<?php
include "session.php";
$data1 = mysqli_query($konek_db,"SELECT * FROM penyakit");
$kerusakan = mysqli_num_rows($data1);

$data2 = mysqli_query($konek_db,"SELECT * FROM gejala");
$gejala = mysqli_num_rows($data2);

$data3 = mysqli_query($konek_db,"SELECT * FROM basispengetahuan");
$relasi = mysqli_num_rows($data3);

$data4 = mysqli_query($konek_db,"SELECT * FROM kendaraan");
$motor = mysqli_num_rows($data4);
?>

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
        <p><a href="homeadmin.php"><button type="button" class="btn btn-primary btn-block active">BERANDA</button></a></p>
        <p><a href="hamadanpenyakit.php"><button type="button" class="btn btn-primary btn-block">JENIS KERUSAKAN</button></a></p>
        <p><a href="gejala.php"><button type="button" class="btn btn-primary btn-block">GEJALA</button></a></p>
        <p><a href="basispengetahuan.php"><button type="button" class="btn btn-primary btn-block">BASIS PENGETAHUAN</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
        <p><a href="logout.php"><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGOUT</button></a></p>
      </div>
      <div class="col-sm-8 text-left">
        <center>
          <h2 style="color: white ;">
          SISTEM PAKAR MENDIAGNOSA KERUSAKAN MOTOR
            MATIC INJEKSI BERBASIS WEB DENGAN MENGGUNAKAN
            METODE FORWARD CHAINING DI CV. PROKING MOTOR
          </h2>
        </center><br>
        <div class="row">
          <div class="col-sm-12">
            <div class="col-sm-6" style="float: left;">
              <p>Selamat datang <?php echo $login_session; ?>.Silahkan pilih menu yang diinginkan</p>
              <div class="card">
                <div class="card-body">
                  
                  <img src="image/a2.png" width="400" height="300">
                </div>
              </div>
              </div>
            <div class="col-sm-6">
              <!-- <img src="image/1.png" width="400" height="300"> -->
              <table>
                <tr>
                  <th>
                      <div class="relasi" style="background-color: lightgrey;
                      width: 150px;
                      padding: 20px;
                      background-color:#1C6EA4;
                      color:white
                      ">
                      Total Relasi <br>
                      <h2><?= $relasi;?></h2>
                    </div>
                  </th>
                  <th>
                    <div class="relasi" style="background-color: lightgrey;
                      width: 150px;
                      padding: 20px;
                      background-color:yellowgreen;
                      color:white
                      ">
                      Total  kerusakan <br> <h2><?= $kerusakan;?></h2>
                    </div>
                  </th>
                  <th>
                    <div class="relasi" style="background-color: lightgrey;
                        width: 150px;
                        padding: 20px;
                        background-color:slategrey;
                        color:white
                        ">
                        Total Kendaraan  <br> <h2><?= $motor;?></h2>
                      </div>
                    </th>
                    <th>
                      <div class="relasi" style="background-color: lightgrey;
                    width: 150px;
                    padding: 20px;
                    background-color:cadetblue;
                    color:white
                    ">
                    Total Gejala <br> <h2><?= $gejala;?></h2>
                  </div>
                  </th>
                </tr>
                
              </table>
              
             
              
             
          </div>
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

</body>

</html>