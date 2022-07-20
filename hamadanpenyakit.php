<?php
include('koneksi.php');
$sql = mysqli_query($konek_db,  "SELECT * FROM kendaraan ORDER BY nama_kendaraan ASC");

if (isset($_SESSION['login_user'])) {
  header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head style="background-color:darkgray" onload="realTimeClock()">
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
      <div class="col-sm-2 sidenav"  style="background-color:darkgray; border-right: 1px solid #1C6EA4;">
        <p><a href="homeadmin.php"><button type="button" class="btn btn-primary btn-block">BERANDA</button></a></p>
        <p><a href="hamadanpenyakit.php"><button type="button" class="btn btn-primary btn-block active">JENIS KERUSAKAN</button></a></p>
        <p><a href="gejala.php"><button type="button" class="btn btn-primary btn-block">GEJALA</button></a></p>
        <p><a href="basispengetahuan.php"><button type="button" class="btn btn-primary btn-block">BASIS PENGETAHUAN</button></a></p>
        <br><br><br><br><br><br><br><br><br><br>
        <p><a href="logout.php"><button type="button" class="btn btn-primary btn-block" id="myBtn">LOGOUT</button></a></p>
      </div>
      <div class="col-sm-8 text-left">
      
        <br>
        <h2 class="text-center">JENIS KERUSAKAN</h2>
        <a href="ainputpenyakit.php"><button type="button" class="btn btn-warning">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Tambah Data
          </button>
        </a>
        <a href="kendaraan.php"><button type="button" class="btn btn-success">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
            Tambah Jenis Kendaraan
          </button>
        </a>
        <a href="v_kendaraan.php"><button type="button" class="btn btn-secondary">
             Jenis Kendaraan
          </button>
        </a>
        <br><br>
        <form id="form1" name="form1" method="post" action="hamadanpenyakit.php">
          <label for="sel1">Pilih Jenis Kendaraan</label>
          <select style="outline: 1px solid #1C6EA4;outline-offset: 3px;" class="form-control" name="tanaman" onChange='this.form.submit();'>
            <option selected>Pilih kendaraan</option>
            <?php while ($data = mysqli_fetch_array($sql)) { ?>
                
                <option><?= $data['nama_kendaraan'] ?></option>
                
                
                <?php }?>
              </select>
        </form><br>
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
                    <td>
                      <a href=\"adetailpenyakit.php?id=" . $data[0] . "\">
                        <i class='glyphicon glyphicon-search'></i>
                      </a>" . " || <a href=\"aeditpenyakit.php?id=" . $data[0] . "\"><i class='glyphicon glyphicon-pencil'></i></a>" . " || <a href=\"adeletepenyakit.php?id=" . $data[0] . "\" onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a>" . "
                    </td>
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
  <script language="JavaScript" type="text/javascript">
    function checkDelete() {
      return confirm('Yakin menghapus data ini?');
    }
  </script>

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