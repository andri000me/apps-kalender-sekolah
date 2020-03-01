<?php
include "../../config/koneksi.php";
$kode=$_GET['kode'];
$nama=$_GET['nama'];
$q=mysql_query("insert into jurusan(kd_jrsn,nama_jrsn)values('$kode','$nama')");
 ?>