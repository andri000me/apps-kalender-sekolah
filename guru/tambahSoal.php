<?php 
include "../config/koneksi.php";
$cek=mysql_query("select max(id_tugas) as idt from tugas");
$g=mysql_fetch_array($cek);
$y=$g['idt']+1;
if(isset($_POST['simpan'])){
$idkode=$_POST['idkode'];
$kode=$_POST['kode'];
$desc=$_POST['desc'];
$jenis=$_POST['jenis'];
$awal=$_POST['awal'];
$akhir=$_POST['akhir'];
$keterangan=$_POST['keterangan'];
$cek=mysql_query("select max(id_tugas) as id from tugas")or die(mysql_error());
$y=mysql_fetch_array($cek);
$t=$y['id']+1;
if($jenis==1){
$fileName = $_FILES['file']['name'];
$q=mysql_query("insert into tugas(id_jdwl,deskripsi,tgl_mulai,tgl_akhir,keterangan,jenis,file,kd_tugas)values('$kode','$desc','$awal','$akhir','$keterangan','$jenis','$fileName','$idkode')")or die(mysql_error());
move_uploaded_file($_FILES['file']['tmp_name'],'./../upload/'.$fileName);
$jml=$_POST['jml'];
for ($x=0;$x<=$jml-1;$x++) {
			
			$tmpJawaban = "jawaban_$x";
			$jawaban =$_POST[$tmpJawaban];
			$sale = mysql_query("INSERT INTO tugas_detail(id_jdwl,kd_tugas,jwbn) values('$kode','$idkode','$jawaban')")or die(mysql_error());
		
		}
	

}
elseif($jenis==2){

$q=mysql_query("insert into tugas(id_jdwl,deskripsi,tgl_mulai,tgl_akhir,keterangan,jenis,kd_tugas)values('$kode','$desc','$awal','$akhir','$keterangan','$jenis','$idkode')")or die(mysql_error());

$jml=$_POST['jml'];
for ($x=0;$x<=$jml-1;$x++) {
			$tmpSoal = "soal_$x";
			$soal =$_POST[$tmpSoal];
			$tmpJawaban = "jawaban_$x";
			$jawaban =$_POST[$tmpJawaban];
			$sale = mysql_query("INSERT INTO tugas_detail(id_jdwl,tugas,kd_tugas,jwbn) values('$kode','$soal','$idkode','$jawaban')")or die(mysql_error());
		
		}
	}
header("location:admin.php?page=dataSoal");
}
?>
<script>
$(document).ready(function() {

$("#jenis").change(function(){
	var j=$("#jenis").val();
	if(j==2){
	$("#file").attr('disabled','disabled');
	$("#esay").load("esay.php");
	}
	
	else{
	$("#file").removeAttr('disabled');
	$("#esay").load("ganda.php");
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
                <td><span class="required">*</span> Kode Tugas:</td>
                <td>
                <input type="text" name="idkode"  size="80" id="idkode"  value="T00<?php echo $y ?>" readonly  />
                </td>
              </tr>
             
              <tr>
                <td><span class="required">*</span> Kode Jadwal:</td>
                <td>
                <select id="kode" style="width:300px" name="kode">
                <?php 
				$id=$_GET['id'];
				$x=mysql_query("select * from jadwal where id_guru='$id'");
				while($c=mysql_fetch_array($x)){
				?>
                <option value="<?php echo $c['0']?>"><?php echo $c['1']?>&nbsp;&nbsp;<?php echo $c['2']?>:<?php echo $c['3']?></option>
                <?php }?>
                </select>
                </td>
              </tr>
             
              
              
              
               <tr>
                <td><span class="required">*</span>Judul Tugas:</td>
                <td><input type="text" name="desc" value="" size="80" id="desc" required /></td>
              </tr>
                <tr>
                <td><span class="required">*</span>Jenis Tugas:</td>
                <td>
                <select name="jenis" style="width:300px" id="jenis">
                <option value="1">Pilihan Berganda</option>
                <option value="2">Esay</option>
               
                  
                </select>
                </td>
              </tr>
               <tr>
                <td><span class="required">*</span>Tanggal Mulai:</td>
                <td>
                <input type="text" name="awal" value="" size="80" id="awal" class="date1" required  />
                </td>
              </tr>
              <tr>
                <td><span class="required">*</span>Tanggal Akhir:</td>
                <td>
                <input type="text" name="akhir" value="" size="80" id="akhir" class="date2" required />
                </td>
              </tr>
              
              <tr>
                <td><span class="required">*</span>File Upload:</td>
                <td>
                <input type="file" name="file" value="" size="80" id="file" required />
                </td>
              </tr>
              <tr>
                <td><span class="required">*</span>Keterangan:</td>
                <td>
                <textarea name="keterangan" cols="45" rows="5" required ></textarea>
                </td>
              </tr>
            </table>
            
            
            <div id="esay"></div>
              <input type="submit" value="save" name="simpan"  />
            </form>
                      </div>
                  </div>
                  </div>