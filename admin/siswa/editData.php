<?php
include "../../config/koneksi.php";
$nis=$_GET['nis'];
$nama=$_GET['nama'];
$password=$_GET['password'];
$alamat=$_GET['alamat'];
$jurusan=$_GET['jurusan'];

$q=mysql_query("update siswa set nama_siswa='$nama',password='$password',alamat='$alamat',id_jrsn='$jurusan' where nis='$nis'");
 ?>