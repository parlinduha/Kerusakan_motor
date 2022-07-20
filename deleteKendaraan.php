<?php
include('koneksi.php');
$query="DELETE from kendaraan where id='".$_GET['id']."'";
mysqli_query($konek_db, $query);
header("location:v_kendaraan.php");
?>