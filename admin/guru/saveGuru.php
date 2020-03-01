<?php
include "../../config/koneksi.php";
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$password=$_POST['password'];
$foto=$_FILES['foto']['name'];
$upload=move_uploaded_file($_FILES['foto']['tmp_name'],'imgguru/'.$foto);

$q=mysql_query("insert into guru(nip,nama_guru,password,foto)values('$kode','$nama','$password','$foto')");
if ($q){

	?>
    <script>document.location='../admin.php?page=guru/dataGuru';</script>
<?php 
	}
	else{
		echo"gagal";
		}
?>