<?php
include "../../config/koneksi.php";
$id=$_GET['id'];

$q=mysql_query("delete from guru where id_guru='$id'");
header("location:../admin.php?page=guru/guru");
 ?>