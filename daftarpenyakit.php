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
        <!-- <p><a href="diagnosa.php"><button type="button" class="btn btn-primary btn-block">DIAGNOSA KERUSAKAN</button></a></p> -->
        <p><a href="daftarpenyakit.php"><button type="button" class="btn btn-primary btn-block active">DAFTAR KERUSAKAN</button></a></p>
        <p><a href="about.php"><button type="button" class="btn btn-primary btn-block">ABOUT</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
        <p><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGIN</button></p>
      </div>
      <div class="col-sm-8 text-left">
        <h2 class="text-center">DAFTAR KERUSAKAN</h2>
        <form id="form1" name="form1" method="post" action="daftarpenyakit.php">
          <label for="sel1">Jenis Kendaraan</label>
          <select style="background-color:#1C6EA4; color:aliceblue" class="form-control" name="tanaman" onChange='this.form.submit();'>
            <option>Pilih Kendaraan</option>
            <option>Mio S</option>
            <option>Fino</option>
          </select>
        </form>

        <br>
        <div class="box-body table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>ID Kerusakan</th>
                <th>Nama Kerusakan</th>
                <th>Jenis Kendaraan</th>
                <th>Detail</th>
              </tr>
            </thead>
            <?php
            if (isset($_POST['tanaman']))
              if ($_POST['tanaman'] != "jenistanaman") {
                $queri = "Select * From penyakit where jenistanaman = \"" . $_POST['tanaman'] . "\"";
                $hasil = mysqli_query($konek_db, $queri);
                $id = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                  $id++;
                  echo "      
        			<tr>  
        			<td>" . $id . "</td>
					<td>" . $data[0] . "</td>  
        			<td>" . $data[1] . "</td>  
        			<td>" . $data[2] . "</td>  
                    <td><a href=\"detailpenyakit.php?id=" . $data[0] . "\"><i class='glyphicon glyphicon-search'></i></a></td>
        		</tr>   
        	";
                }
              }
            ?>
          </table><br><br><br><br><br>
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
  <script>
    $(document).ready(function() {
      $("#myBtn").click(function() {
        $("#myModal").modal();
      });
    });
  </script>

</body>

</html>