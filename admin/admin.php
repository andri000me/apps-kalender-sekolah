<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['authorized'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="UTF-8" />
<title>Halaman Admin</title>

<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
<script type="text/javascript" src="../js/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../js/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<link type="text/css" href="../js/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery/tabs.js"></script>
<script type="text/javascript" src="../js/jquery/superfish/js/superfish.js"></script>
<script type="text/javascript" src="../js/common.js"></script>

</head>
<body>
<div id="container">
    <div id="header">
  <div class="div1">
    <div class="div2">
			<font size="5">
		Sekolah Menengah Atas
			</font>
	</div>
        <div class="div3">&nbsp;Selamat Datang <span><?php echo $_SESSION['username']?></span></div>
      </div>
    <div id="menu">
    <ul class="left" style="display: none;">
      <li id="dashboard"><a href="?page=home" class="top">Dashboard</a></li>
      <?php if($_SESSION['level']=='2'){ ?>
      	<li id="catalog"><a class="top">Guru</a>
        <ul>
          <li><a href="?page=guru/dataGurus">Data Guru</a></li>
        </ul>
      </li>
      <li id="extension"><a class="top">Siswa</a>
         <ul>
          <li><a href="?page=siswa/dataSiswas">Data Siswa</a></li>
          
        </ul>
      </li>
      <li id="system"><a class="top">Kelas</a>
        <ul>
          <li><a href="?page=kelas/dataKelass">Data Kelas</a></li>
        </ul>
      </li>
      <li id="reports"><a class="top">Jurusan</a>
        <ul>
          <li><a href="?page=jurusan/dataJurusans">Data Jurusan</a></li>
           </ul>
          </li>
      <li id="help"><a class="top">Jadwal</a>
        <ul>
          <li><a href="?page=jadwal/dataJadwals">Data Jadwal</a></li>
          
        </ul>
      </li>
      <li id="help"><a class="top">Informasi</a>
        <ul>
          <li><a href="?page=informasi/datainfrms">Data Informasi</a></li>
          
        </ul>
      </li>
      
      </ul>
      <?php }?>
      
      
      <?php if($_SESSION['level']=='1'){ ?>
      <li id="catalog"><a class="top">Guru</a>
        <ul>
          <li><a href="?page=guru/tambahGuru">Input Guru</a></li>
          <li><a href="?page=guru/dataGuru">Data Guru</a></li>
        </ul>
      </li>
      <li id="extension"><a class="top">Siswa</a>
         <ul>
          <li><a href="?page=siswa/siswaAdd" >Input Siswa</a></li>
          <li><a href="?page=siswa/dataSiswa">Data Siswa</a></li>
          
        </ul>
      </li>
      
      <li id="system"><a class="top">Kelas</a>
        <ul>
          
         
          <li><a href="?page=kelas/kelasAdd">Input Kelas</a></li>
          <li><a href="?page=kelas/dataKelas">Data Kelas</a></li>
        </ul>
      </li>
      <li id="reports"><a class="top">Jurusan</a>
        <ul>
         <li><a href="?page=jurusan/jurusanAdd">Input Jurusan</a></li>
          <li><a href="?page=jurusan/dataJurusan">Data Jurusan</a></li>
           </ul>
      </li>
      <li id="help"><a class="top">Jadwal</a>
        <ul>
          <li><a href="?page=jadwal/jadwalAdd" >Input Jadwal</a></li>
          <li><a href="?page=jadwal/dataJadwal">Data Jadwal</a></li>
          
        </ul>
      </li>
      <li id="help"><a class="top">Informasi</a>
        <ul>
          <li><a href="?page=informasi/infrm" >Upload</a></li>
          <li><a href="?page=informasi/datainfrm">Data Informasi</a></li>
          
        </ul>
      </li>
    </ul>
    <?php }?>
    <ul class="right" style="display: none;">
              <ul>
                  </ul>
      </li>
      <li><a class="top" href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
<div id="content">
  
    <div class="box">
   
   
   <?php 
	if(isset($_GET['page'])){
		$page=htmlentities($_GET['page']);
	  	$halaman="$page.php";
	  	if(!file_exists($halaman) || empty($page)){ 
			include_once "home.php";
		}else{
			include_once "$halaman";
		}
	}else{ 
		include_once "home.php";
	}?>
</div>
  </div>
</div>

</div>
<div id="footer">
	<font size="5">
		Sekolah Menengah Atas
			</font>
</div>
</body></html>