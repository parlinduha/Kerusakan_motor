<?php
include('koneksi.php');

if (isset($_SESSION['login_user'])) {
  header("location: about.php");
}
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
        <p><a href="index.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
        <!-- <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block active">JENIS KERUSAKAN</button></a></p> -->
        <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block">DAFTAR KERUSAKAN</button></a></p>
        <p><a href="about.php"><button type="button" class="btn btn-primary btn-block">ABOUT</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
        <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
      </div>
      <div class="col-sm-8 text-left">
        <h2 class="text-center">DETAIL DIAGNOSA</h2>
        <div class="form-group" method="POST">
          <br><label class="control-label col-sm-2">ID Kerusakan</label>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text'  class='form-control' id='idpenyakit' readonly value='" . $data['idpenyakit'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <br><label class="control-label col-sm-2">Nama Kerusakan</label>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text'  class='form-control' id='namapenyakit' readonly value='" . $data['namapenyakit'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <br><label class="control-label col-sm-2">Jenis Kendaraan</label>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['jenistanaman'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <br><label class="control-label col-sm-2">Gejala</label>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit p, basispengetahuan b where p.idpenyakit='" . $_GET['id'] . "' and p.namapenyakit=b.namapenyakit";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<input type='text'  class='form-control' id='jenistanaman' readonly value='" . $data['gejala'] . "'><br>";
            }
            ?>
          </div>
        </div>
        <div class="form-group" method="POST">
          <br><label class="control-label col-sm-2">Solusi</label><br>
          <div class="col-sm-10">
            <?php
            $tampil = "SELECT * FROM penyakit where idpenyakit='" . $_GET['id'] . "'";
            $sql = mysqli_query($konek_db, $tampil);
            while ($data = mysqli_fetch_array($sql)) {
              echo "<textarea rows='8' class='form-control' id='penanganan' readonly>" . $data['kulturteknis'] . "</textarea><br>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fadem" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Silahkan login </h4>
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

</body>

</html>