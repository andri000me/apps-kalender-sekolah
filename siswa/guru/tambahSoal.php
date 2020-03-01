<?php 
include "../config/koneksi.php";
if(isset($_POST['simpan'])){

$kode=$_POST['kode'];
$desc=$_POST['desc'];
$jenis=$_POST['jenis'];
$awal=$_POST['awal'];
$akhir=$_POST['akhir'];
$keterangan=$_POST['keterangan'];
$cek=mysql_query("select max(soal_id) as id from soal");
$y=mysql_fetch_array($cek);
$t=$y['id']+1;
if($jenis==1){
$fileName = $_FILES['file']['name'];
$q=mysql_query("insert into soal(jadwal_id,deskripsi,tanggal_mulai,tanggal_akhir,keterangan,jenis,file)values('$kode','$desc','$awal','$akhir','$keterangan','$jenis','$fileName')")or die(mysql_error());
move_uploaded_file($_FILES['file']['tmp_name'],'./../upload/'.$fileName);
}
elseif($jenis==3){

$q=mysql_query("insert into soal(jadwal_id,deskripsi,tanggal_mulai,tanggal_akhir,keterangan,jenis)values('$kode','$desc','$awal','$akhir','$keterangan','$jenis')")or die(mysql_error());

$jml=$_POST['jml'];
for ($x=0;$x<=$jml-1;$x++) {
			$tmpSoal = "soal_$x";
			$soal =$_POST[$tmpSoal];
			$sale = mysql_query("INSERT INTO soal_detail(jadwal_id,soal,soal_id) values('$kode','$soal','$t')")or die(mysql_error());
		
		}
	}
elseif($jenis==2){
$q=mysql_query("insert into soal(jadwal_id,deskripsi,tanggal_mulai,tanggal_akhir,keterangan,jenis)values('$kode','$desc','$awal','$akhir','$keterangan','$jenis')")or die(mysql_error());

$jml=$_POST['jml'];
for ($x=0;$x<=$jml-1;$x++) {
			$tmpSoal = "soal_$x";
			$soal =$_POST[$tmpSoal];
			$sale = mysql_query("INSERT INTO soal_detail(jadwal_id,soal,soal_id) values('$kode','$soal','$t')")or die(mysql_error());
		
		}
	

}

}
?>
<script>
$(document).ready(function() {

$("#jenis").change(function(){
	var j=$("#jenis").val();
	if(j==2){
	$("#file").attr('disabled','disabled');
	$("#esay").load("guru/esay.php");
	}
	else if(j==3){
	$("#file").removeAttr('disabled');
	$("#esay").load("guru/esay.php");
	
	}
	else{
	$("#file").removeAttr('disabled');
	$("#esay").html("");
	}
	
	});
	$('.date1').datepicker({dateFormat: 'yy-mm-dd'});
	$('.date2').datepicker({dateFormat: 'yy-mm-dd'});
	
	
});
</script>
<div class="heading">

      <h1><img src="../image/product.png" alt="" /> Add Tugas</h1>
 
    
      
    </div>
     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        <a href="#language1"><img src="../guru/view/image/flags/gb.png" title="English" /> English</a>
                      </div>
                    <div id="language1">
                    <form method="post" enctype="multipart/form-data">     
            <table class="form" >
              <tr>
                <td><span class="required">*</span> Kode Jadwal:</td>
                <td>
                <select id="kode" style="width:300px" name="kode">
                <?php 
				$x=mysql_query("select * from jadwal");
				while($c=mysql_fetch_array($x)){
				?>
                <option value="<?php echo $c['jadwal_id']?>"><?php echo $c['jadwal_kode']?>&nbsp;&nbsp;<?php echo $c['jadwal_tanggal']?>:<?php echo $c['jadwal_jam']?></option>
                <?php }?>
                </select>
                </td>
              </tr>
             
              
              
              
               <tr>
                <td><span class="required">*</span>Deskripsi:</td>
                <td><input type="text" name="desc" value="" size="80" id="desc" /></td>
              </tr>
                <tr>
                <td><span class="required">*</span>Jenis Tugas:</td>
                <td>
                <select name="jenis" style="width:300px" id="jenis">
                <option value="1">Pilihan Berganda</option>
                <option value="2">Esay</option>
                 <option value="3">Keduanya</option>
                  
                </select>
                </td>
              </tr>
               <tr>
                <td><span class="required">*</span>Tanggal Mulai:</td>
                <td>
                <input type="text" name="awal" value="" size="80" id="awal" class="date1"  />
                </td>
              </tr>
              <tr>
                <td><span class="required">*</span>Tanggal Akhir:</td>
                <td>
                <input type="text" name="akhir" value="" size="80" id="akhir" class="date2" />
                </td>
              </tr>
              
              <tr>
                <td><span class="required">*</span>File Upload:</td>
                <td>
                <input type="file" name="file" value="" size="80" id="file" />
                </td>
              </tr>
              <tr>
                <td><span class="required">*</span>Keterangan:</td>
                <td>
                <textarea name="keterangan" cols="45" rows="5" ></textarea>
                </td>
              </tr>
            </table>
            
            
            <div id="esay"></div>
              <input type="submit" value="save" name="simpan"  />
            </form>
                      </div>
                  </div>
                  </div>