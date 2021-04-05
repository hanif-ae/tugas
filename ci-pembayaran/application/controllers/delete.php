<?php
include 'petugas.php';
// menyimpan data id kedalam variabel
$id_petugas   = $_GET['id_petugas'];
// query SQL untuk insert data
$query="DELETE from petugas where id_petugas='$id_petugas'";
mysqli_query($petugas, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>