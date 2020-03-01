<?php
session_start();
include_once("../config/koneksi.php");
if(isset($_POST['login']) ? $_POST['login']: ''){
$username=  isset($_POST['username']) ? $_POST['username']: '';
$password= isset($_POST['password']) ? $_POST['password']: '';
 // mengenkripsi password dengan metode md5
if(empty($username) || empty($password)){
	echo ("<script type='text/javascript'>alert('Silahkan isi semua data');document.location='javascript:history.back(1)';</script>");
}else{
	$query=mysql_query("select * from guru where nip = '$username' and password = '$password'");
	$data=mysql_fetch_array($query);
	if($username==$data['nip'] && $password==$data['password']){
		$_SESSION['username'] = $data['nip']; 	
		$_SESSION['id_guru'] = $data['id_guru']; 	
		$_SESSION['nama_guru'] = $data['nama_guru']; 	
		$_SESSION['mata_pelajaran'] = $data['mata_pelajaran']; 	
		$_SESSION['foto'] = $data['foto']; 		
		$_SESSION['authorized'] = 1;
		header('location:admin.php');
	}else{
		echo ("<script type='text/javascript'>alert('Username atau Password anda salah');document.location='javascript:history.back(1)';</script>");
	}
}
}
?>