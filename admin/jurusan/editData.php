<?php
include "../../config/koneksi.php";
$kode=$_GET['kode'];
$nama=$_GET['nama'];
$q=mysql_query("update jurusan set nama_jrsn='$nama' where kd_jrsn='$kode'");
 ?>