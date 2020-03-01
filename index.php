<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>SMA Sekolah Menengah Atas</title>
<meta name="description" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Skin (you can set a different color skin here - just change the name of the color)
  ================================================== -->
<link rel="stylesheet" href="stylesheets/skins/red.css">

<!-- CSS
  ================================================== -->
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/styleresponsive.css">
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Favicons
	================================================== -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>
<body>
<!-- Navigation
	================================================== -->
<div id="wrapnav">
	<div class="container">
		<div class="three columns alpha">
			<div id="top" style="display:inline;">
				<span class="logo"><a href="index.html">Nama Sekolah</a></span><br/>
				<span class="subheader">TANGERANG</span>
		  </div>
		</div>
	  <div class="thirteen columns omega">
			<div class="menu">
				<nav>
				<ul class="menuitems">
					<li><a href="?page=home">Home</a></li>
					<li><a href="?page=tentang">Profile</a></li>
                    <li><a href="?page=sejarah">Sejarah</a></li>
                    <li><a href="?page=kulikuler">Kegiatan</a></li>
					<li><a href="kk/index.php">Gallery</a></li>
                    <li><a href="test/ok.php">Calendar</a></li>
					<li><a href="?page=kontak">Info</a></li>
                    <li><a href="siswa/">Siswa</a></li>
                    <li><a href="guru/">Guru</a></li>
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Header
	================================================== -->
<div class="header">
	<div class="container">
		<div class="nine columns alpha">
			<div class="rslides_container">
				<ul class="rslides" id="slider2">
					<li><a href="#"><img src="Foto guru/img1.png" alt="" class="slidepic"></a></li>
					<li><a href="#"><img src="Foto guru/img2.png" alt="" class="slidepic"></a></li>
					<li><a href="#"><img src="Foto guru/img3.png" alt="" class="slidepic"></a></li>
				</ul>
			</div>
		</div>
		<div class="seven columns omega">
			<div class="slidertext">
				<h1>Nama Sekolah</h1>
				<h2>Visi Dan Misi Sekolah : </h2>
				<p><ul>
					 <li><img src="images/star.png" class="middlealign"> Menciptakan Kreasi Anak Bangsa</li>
					 <li><img src="images/star.png" class="middlealign"> Mendidik Dengan Kasih Sayang</li>
					 <li><img src="images/star.png" class="middlealign"> Menjadikan Anak Unggulan</li>
				     <li><img src="images/star.png" class="middlealign"> Metode Pembelajaran yang sempurna</li>
				   
				   </ul>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="afterheader">
</div>


<div class="container">

	<?php 
				if(isset($_GET['page'])){
					$page=htmlentities($_GET['page']);
					$halaman="$page.php";
					if(!file_exists($halaman) || empty($page)){
						echo "Welcome";
				}
				else{
					include_once "$halaman";
				}
				}else{
					include "home.php";
				}
	?>

</div>
    
	<div class="footerwrap">
		<div class="footer">
			<p class="back-top floatright">
				<a href="#top"><span></span></a>
			</p>
			<div class="container negdown">
				<div class="sixteen columns negdown">
					<div class="four columns alpha">
						<div class="footertext">
							<h1>Sekolah Menengah Atas</h1>
							 	Jl........
                                <br/>
                                Kel........
							<div class="newsletter">
								<div class="newsletterdone">
									<button type="button" class="close" data-dismiss="alert">x</button>
									<div class="newsletteralert">
										<b>You have been subscribed!</b>
									</div>
									<br/>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="gototopmobile">
			<a href="#top">Go to Top</a>
		</div>
		 Copyright &copy; 20.. ekolah Menengah Atas : by Yusron
	</div>
	<!-- Scripts
================================================== -->
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="peel/peel.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/responsivemenu.js"></script>
	<script src="js/formsvalidation.js"></script>
	<!-- End Document
================================================== -->
</body>
</html>