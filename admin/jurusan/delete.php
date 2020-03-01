<?php
include "../../config/koneksi.php";
$id=$_GET['id'];

$q=mysql_query("delete from jurusan where id_jrsn='$id'");
header("location:../admin.php?page=jurusan/dataJurusan");
 ?>