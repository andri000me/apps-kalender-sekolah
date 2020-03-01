<?php
include "../../config/koneksi.php";
$id=$_GET['id'];

$q=mysql_query("delete from kelas where id_kls='$id'");
header("location:../admin.php?page=kelas/dataKelas");
 ?>