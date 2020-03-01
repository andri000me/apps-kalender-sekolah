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
	$query=mysql_query("select * from admin where username = '$username' and password = '$password'");
	$data=mysql_fetch_array($query);
	if($username==$data['username'] && $password==$data['password']){
		$_SESSION['username'] = $data['username']; 
		$_SESSION['level'] = $data['level'];
		$_SESSION['authorized'] = 1;
		header('location:admin.php');
	}else{
		echo ("<script type='text/javascript'>alert('Username atau Password anda salah');document.location='javascript:history.back(1)';</script>");
	}
}
}
?>