<?php 
include "../config/koneksi.php";
$id=$_GET['id'];
$nis=$_SESSION['nis'];
$tgl=date("Y-m-d");
$d=mysql_query("select tugas.*,jadwal.kd_jdwl from tugas join jadwal on tugas.id_jdwl=jadwal.id_jdwl where tugas.kd_tugas='$id'");
$m=mysql_fetch_array($d);
$s=$_GET['sis'];
$id=$_GET['id'];
$ck=mysql_query("select * from nilai where kd_tugas='$id' and  kd_siswa='$s'");
$num=mysql_num_rows($ck);
if(isset($_POST['simpan'])){
$cek=mysql_query("select count(detail_id) as det from soal_detail where soal_id='$id'");
$fm=mysql_fetch_array($cek);
$tr=$fm['det'];

for ($x=1;$x<=$tr;$x++) {
			$tmpJawab ="jawab_$x";
			$jawab =$_POST[$tmpJawab];
			
			$sale = mysql_query("INSERT INTO jawaban(tanggal,soal_id,siswa_id,jawaban)values('$tgl','$id','$nis','$jawab')")or die(mysql_error());
		
		}
}
?>

<div class="heading">

      <h1><img src="../image/product.png" alt="" /> Jawaban Soal</h1>
 
    
      
    </div>
     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        <a href="#language1"><img src="../guru/view/image/flags/gb.png" title="English" /> English</a>
                      </div>
                    <div id="language1">
                     
            <table class="form" >
              <tr>
                <td><span class="required">*</span> Kode Jadwal:</td>
                <td>
               <?php echo $m[8];?>                </td>
              </tr>
             
              
              
              
               <tr>
                <td><span class="required">*</span>Deskripsi:</td>
                <td> <?php echo $m[2];?></td>
              </tr>
                <tr>
                <td><span class="required">*</span>Jenis Tugas:</td>
                <td>
                 <?php $f=$m[3];
				 if($f==1){
				 $g='Pilihan Berganda';
				 }
				 else{
				 $g='Esay';
				 }
				 echo $g;
				 ?>                </td>
              </tr>
               <tr>
                <td><span class="required">*</span>Tanggal Mulai:</td>
                <td>
                 <?php echo $m[4];?>                </td>
              </tr>
              <tr>
                <td><span class="required">*</span>Tanggal Akhir:</td>
                <td>
                <?php echo $m[5];?>                </td>
              </tr>
              
             
              <tr>
                <td><span class="required">*</span>Keterangan:</td>
                <td><?php echo $m['keterangan'];?></td>
              </tr>
              
            </table>
            
            
            <?php 
			
			$k=$m[3];
		
			if($k!=1){
			?>
              <table id="module" class="list" >
                <thead>
                  <tr>
                    <td class="left">No</td>
                    <td height="29" class="left">Soal Esay</td>
                  </tr>
                </thead>
                <tbody>
                <?php 
				$n=1;
				$det=mysql_query("select * from tugas_detail where kd_tugas='$_GET[id]'");
				while($dat=mysql_fetch_array($det)){
				
				?>
                  <tr>
                    <td class="left"><?php echo $n?></td>
                    <td class="left"><?php echo $dat[3]?></td>
                  </tr>
                  <?php $n++; }?>
                </tbody>
              </table>
              <?php }?>
               <form method="post" enctype="multipart/form-data">   
              <table class="list" id="module2" >
                <thead>
                  <tr>
                    <td class="left">No</td>
                    <td height="29" class="left">Jawaban Soal 
                    <?php  $l=$m[3];	if($l!=2){$tg='Pilihan Berganda';}else{$tg='Esay';}echo $tg;?></td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
				  $s=$_GET['sis'];
				$n=1;
				$nis=$_SESSION['nis'];
				$det=mysql_query("select * from jawaban_detail where kd_tugas='$_GET[id]' and id_siswa='$s'");
				while($dat=mysql_fetch_array($det)){
				
				?>
                  <tr>
                    <td class="left"><?php echo $n?></td>
                    <td class="left"><input type="text" name="jawab_<?php echo $n?>"  style="width:100%" value="<?php echo $dat['jwbn']?>" readonly></td>
                  </tr>
                  <?php $n++; }?>
                </tbody>
              </table>
             <?php 
                    if($num>0){
$jk=mysql_query("select * from nilai where kd_tugas='$id' and  kd_siswa='$s'");
$kl=mysql_fetch_array($jk);
echo "Hasil Penilaian :&nbsp;&nbsp;$kl[3]";
}

?><br>
                <input type="submit" value="Print" name="simpan"  />
                </p>
                    </form>
                      </div>
                  </div>
                  </div>