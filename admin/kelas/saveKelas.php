<?php
include "../../config/koneksi.php";
$kode=$_GET['kode'];
$nama=$_GET['nama'];
$q=mysql_query("insert into kelas(kd_kls,nama_kls)values('$kode','$nama')");
 ?>