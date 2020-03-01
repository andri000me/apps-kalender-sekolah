<?php
include "../../config/koneksi.php";
$id=$_GET['id'];

$q=mysql_query("delete from siswa where id_siswa='$id'");
header("location:../admin.php?page=siswa/dataSiswa");
 ?>