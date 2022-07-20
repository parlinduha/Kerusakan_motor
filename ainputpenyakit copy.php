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

  <script src="js/validator.js"></script>
  <script src="./Js/jam.js"></script>

</head >

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
        <p><a href="homeadmin.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
        <p><a href="hamadanpenyakit.php"><button type="button" class="btn btn-primary btn-block active">JENIS KERUSAKAN</button></a></p>
        <p><a href="gejala.php"><button type="button" class="btn btn-primary btn-block">GEJALA</button></a></p>
        <p><a href="basispengetahuan.php"><button type="button" class="btn btn-primary btn-block">BASIS PENGETAHUAN</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
        <p><a href="logout.php"><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGOUT</button></a></p>
      </div>
      <div class="col-sm-8 text-left">
        <h2 class="text-center">INPUT JENIS KERUSAKAN</h2>
        <form class="form-horizontal" method="post" data-toggle="validator" role="form" action="ainputpenyakit.php">

          <div class="form-group has-feedback">
            <label class="control-label col-sm-2" for="idpenyakit">ID Kerusakan:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="idpenyakit" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>

          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-sm-2" for="namapenyakit">Nama Kerusakan:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="namapenyakit" data-error="Isi kolom dengan benar">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>

          <div class="form-group ">
            <label class="control-label col-sm-2" for="jenistanaman">Jenis Kendaraan:</label>
            <div class="col-sm-10">
              <select class="form-control" name="jenistanaman" onChange='this.form.submit();'>
                <option>Pilih Kendaraan</option>
                <option>Mio S</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="kulturteknis">Solusi:</label>
            <div class="col-sm-10">
              <textarea rows='8' class="form-control" name="kulturteknis"></textarea>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Simpan</button><br>
          <?php
          if (isset($_POST['submit'])) {

            $idpenyakit     = $_POST['idpenyakit'];
            $namapenyakit   = $_POST['namapenyakit'];
            $jenistanaman   = $_POST['jenistanaman'];
            $kulturteknis   = $_POST['kulturteknis'];
            $query = "INSERT INTO penyakit SET idpenyakit='$idpenyakit',namapenyakit='$namapenyakit',jenistanaman='$jenistanaman',kulturteknis='$kulturteknis'";
            
            
            $result = mysqli_query($konek_db, $query);
            if ($result) {
              echo '<script language="javascript">';
              echo 'alert("Data Berhasil disimpan")';
              echo '</script>';
            }
          }
          ?>
        </form><br>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center" style="margin-top:5%; background-color:darkgray;">
  <div class="copyright">
                    Copyright © <span id="year"></span>  All rights reserved by
                    <a href="#" class="footer-i"><b>Adriana Rika </b></a>
                  </div>
                </footer>
                <script>
                  function getCurrentYear() {
                    return new Date().getFullYear(); // returns the year via local timing
                  }

                  document.getElementById("year").innerHTML = getCurrentYear();
                  //changing the inner html of the span with "year" id to the given year(2021)
  </script>

</body>

</html>