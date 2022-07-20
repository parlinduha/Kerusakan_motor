<?php
include('koneksi.php');
$sql = mysqli_query($konek_db,  "SELECT * FROM kendaraan ORDER BY nama_kendaraan ASC");

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
        <p><a href="homeadmin.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
        <p><a href="hamadanpenyakit.php"><button type="button" class="btn btn-primary btn-block active">JENIS KERUSAKAN</button></a></p>
        <p><a href="gejala.php"><button type="button" class="btn btn-primary btn-block ">GEJALA</button></a></p>
        <p><a href="basispengetahuan.php"><button type="button" class="btn btn-primary btn-block">BASIS PENGETAHUAN</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
        <p><a href="logout.php"><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGOUT</button></a></p>
      </div>
      <div class="col-sm-8 text-left">
        <h2 class="text-center">INPUT JENIS KERUSAKAN</h2>
        <form class="form-horizontal" data-toggle="validator" role="form" method="post" action="ainputpenyakit.php">
          <div class="form-group has-feedback">
            <label class="control-label col-sm-2" for="idpenyakit">ID Kerusakan:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="idpenyakit" data-error="Isi kolom dengan benar" placeholder="Contoh ID :  JK-001">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-sm-2" for="namapenyakit">Nama Kerusakan:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="namapenyakit" data-error="Isi kolom dengan benar"  placeholder="Masukan nama kerusakan">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <!-- <div class="form-group has-feedback">
            <label class="control-label col-sm-2" for="jenistanaman">Jenis Kendaraan:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" required name="jenistanaman" data-error="Isi kolom dengan benar"  placeholder="Contoh kendaraan : Mio">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div> -->
          
          <div class="form-group ">
            <label class="control-label col-sm-2" for="alamat">Jenis Kendaraan:</label>
            <div class="col-sm-10">
              <select class="form-control" name="jenistanaman" onChange='this.form.submit();'>
                <option selected>Pilih kendaraan</option>
              <?php while ($data = mysqli_fetch_array($sql)) { ?>
                
                <option><?= $data['nama_kendaraan'] ?></option>
                <?php }?>
              </select>

            </div>
          </div>
          <div class="form-group has-feedback">
            <label class="control-label col-sm-2" for="kulturteknis">Solusi:</label>
            <div class="col-sm-10">
              <textarea type="text" rows='8' class="form-control" required name="kulturteknis" data-error="Isi kolom dengan benar"  placeholder="Masukan solusi dari kerusakan"></textarea>
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors" role="alert"></div>
            </div>
          </div>
          <a href="hamadanpenyakit.php"  class="btn  btn-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-reply-all-fill" viewBox="0 0 16 16">
                <path d="M8.021 11.9 3.453 8.62a.719.719 0 0 1 0-1.238L8.021 4.1a.716.716 0 0 1 1.079.619V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
                <path d="M5.232 4.293a.5.5 0 0 1-.106.7L1.114 7.945a.5.5 0 0 1-.042.028.147.147 0 0 0 0 .252.503.503 0 0 1 .042.028l4.012 2.954a.5.5 0 1 1-.593.805L.539 9.073a1.147 1.147 0 0 1 0-1.946l3.994-2.94a.5.5 0 0 1 .699.106z"/>
            </svg>
        Kembali   
        </a>
          <button type="submit" name="submit" class="btn btn-lg btn-primary">Simpan</button>
          
          <?php
          if (isset($_POST['submit'])) {
            $idpenyakit     = $_POST['idpenyakit'];
            $namapenyakit       = $_POST['namapenyakit'];
            $kulturteknis       = $_POST['kulturteknis'];
            $jenistanaman = $_POST['jenistanaman'];
            $query = "INSERT INTO penyakit  SET idpenyakit='$idpenyakit',namapenyakit='$namapenyakit',kulturteknis='$kulturteknis',jenistanaman='$jenistanaman'";
            
           

            $result = mysqli_query($konek_db, $query);
            if ($result) {
              echo '<script language="javascript">';
              echo 'alert("Data Berhasil disimpan")';
              echo '</script>';
            }
          }
          ?>
        </form>
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