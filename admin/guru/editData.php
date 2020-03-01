<?php
include "../../config/koneksi.php";
$kode=$_GET['kode'];
$nama=$_GET['nama'];
$password=$_GET['password'];
$q=mysql_query("update guru set nama_guru='$nama',password='$password' where nip='$kode'");
 ?>