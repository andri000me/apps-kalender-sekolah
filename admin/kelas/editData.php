<?php
include "../../config/koneksi.php";
$kode=$_GET['kode'];
$nama=$_GET['nama'];
$q=mysql_query("update kelas set nama_kls='$nama' where kd_kls='$kode'");
 ?>