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
<title>Kalender</title>

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
		SMA Nusa Putra
			</font>
	</div>
        <div class="div3">&nbsp;Selamat Datang <span><?php echo $_SESSION['nama_siswa']?> , 
        	NIS : <?php echo $_SESSION['nis']?>
        </span></div>
      </div>
    <div id="menu">
    <ul class="left" style="display: none;">
      <li id="dashboard"><a href="?page=home" class="top">Home</a></li>
      
      <li id="extension"><a class="top">Siswa</a>
         <ul>
          <li><a href="?page=cekSoal" >Data Soal</a></li>
          <li><a href="?page=soalJawaban">Data Jawaban</a></li>
          
        </ul>
        </li>
      </li>
      <li id="extension"><a class="top">Biodata Guru</a>
        <ul>
        	<li>
            	<li><a href="?page=guru/dataGuru">Lihat</a></li>
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
		SMA Nusa Putra
			</font>
</div>
</body></html>