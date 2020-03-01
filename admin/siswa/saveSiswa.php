<?php
include "../../config/koneksi.php";
$nis=$_GET['nis'];
$nama=$_GET['nama'];
$password=$_GET['password'];
$alamat=$_GET['alamat'];
$jurusan=$_GET['jurusan'];
$q=mysql_query("insert into siswa(nis,nama_siswa,password,alamat,id_jrsn)values('$nis','$nama','$password','$alamat','$jurusan')");
 ?>