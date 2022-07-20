<?php
include "session.php";
$sql = mysqli_query($konek_db,  "SELECT * FROM kendaraan ORDER BY nama_kendaraan ASC");
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
        <p><a href="homeadmin.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
        <p><a href="hamadanpenyakit.php"><button type="button" class="btn btn-primary btn-block">JENIS KERUSAKAN</button></a></p>
        <p><a href="gejala.php"><button type="button" class="btn btn-primary btn-block">GEJALA</button></a></p>
        <p><a href="basispengetahuan.php"><button type="button" class="btn btn-primary btn-block active">BASIS PENGETAHUAN</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
        <p><a href="logout.php"><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGOUT</button></a></p>
      </div>
      <div class="col-sm-8 text-left">
        <h2 class="text-center">BASIS PENGETAHUAN</h2>
        <form id="form1" name="form1" method="post" action="abasispengetahuan.php">
          <label for="sel1">Pilih Jenis Kendaraan</label>
          <select style="outline: 2px solid #1C6EA4;
outline-offset: 1px;" class="form-control" name="tanaman" onChange='this.form.submit();'>
            <option>Pilih Kendaraan</option>
            <?php while ($data = mysqli_fetch_array($sql)) { ?>
                <option><?= $data['nama_kendaraan'] ?></option>
                <?php }?>
          </select>
        </form>
        <br>
        <form id="form1" name="form1" method="post">
          <label for="sel1">Jenis Kerusakan</label>
          <select class="form-control" name="penyakit" style="outline: 2px solid #1C6EA4;
outline-offset: 1px;">
            <option>Pilih Jenis Kerusakan</option>
            <?php
            $tampil = "select * from penyakit where jenistanaman= \"" . $_POST['tanaman'] . "\"";
            $query1 = mysqli_query($konek_db, $tampil);
            while ($hasil = mysqli_fetch_array($query1)) {
              echo "<option value='" . $hasil['namapenyakit'] . "'>" . $hasil['idpenyakit'] . " " . $hasil['namapenyakit'] . "</option>";
            }
            ?>
          </select>
          <br>
          <form id="form2" name="form2" method="post" action="diagnosa.php">
            <div class="panel panel-primary">
              <div class="panel-heading">GEJALA</div>
              <div class="panel-body">
                <?php
                if (isset($_POST['tanaman']))
                  if ($_POST['tanaman'] != "jenistanaman") {
                    $tampil = "select * from gejala where jenistanaman= \"" . $_POST['tanaman'] . "\"";
                    $query = mysqli_query($konek_db, $tampil);
                    while ($hasil = mysqli_fetch_array($query)) {
                      echo "<input type='checkbox' value='" . $hasil['gejala'] . "' name='gejala[]' /> " . $hasil['gejala'] . "<br>";
                    }
                  }
                ?>
               
              </div>
            </div>
            <br><button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            <?php
            if (isset($_POST['submit'])) {
              $penyakit = $_POST['penyakit'];
              $gejala = $_POST['gejala'];
              $jumlah_dipilih = count($gejala);
              for ($x = 0; $x < $jumlah_dipilih; $x++) {
                $hasil = mysqli_query($konek_db, "INSERT INTO basispengetahuan (namapenyakit, gejala) values('$penyakit','$gejala[$x]')");
                if ($hasil) {
                  echo '<script language="javascript">';
                  echo 'alert("Data Berhasil disimpan")';
                  echo '</script>';
                }
              }
            }

            ?>
          </form>
          <br>
          <br>
        </form>
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center" style="margin-top:5%; background-color:darkgrey;">
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
