<?php 
include "../config/koneksi.php";
$id=$_GET['id'];
$nis=$_SESSION['nis'];
$tgl=date("Y-m-d");
$d=mysql_query("select * from tugas where kd_tugas='$id'");
$m=mysql_fetch_array($d);
if(isset($_POST['simpan'])){
$cek=mysql_query("select count(id_detail) as det from tugas_detail where kd_tugas='$id'");
$fm=mysql_fetch_array($cek);
$tr=$fm['det'];
$sal= mysql_query("INSERT INTO jawaban(tgl_jwb,kd_tugas,id_siswa)values('$tgl','$id','$nis')")or die(mysql_error());
for ($x=1;$x<=$tr;$x++) {
			$tmpJawab ="jawab_$x";
			$jawab =$_POST[$tmpJawab];
			
			$sale = mysql_query("INSERT INTO jawaban_detail(kd_tugas,id_siswa,jwbn)values('$id','$nis','$jawab')")or die(mysql_error());
		header('Location:admin.php?page=cekSoal');
		}
}
?>

<div class="heading">

      <h1><img src="../image/product.png" alt="" /> Jawab Soal</h1>
 
    
      
    </div>
     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        <a href="#language1"><img src="../guru/view/image/flags/gb.png" title="English" /> English</a>
                      </div>
                    <div id="language1">
                     
            <table class="form" >
              <tr>
                <td><span class="required">*</span> Kode Soal:</td>
                <td>
               <?php echo $m[2];?>
                </td>
              </tr>
             
              
              
              
               <tr>
                <td><span class="required">*</span>Deskripsi:</td>
                <td> <?php echo $m[3];?></td>
              </tr>
                <tr>
                <td><span class="required">*</span>Jenis Tugas:</td>
                <td>
                 <?php $f=$m[4];
				 if($f==1){
				 $g='Pilihan Berganda';
				 }
				 else{
				 $g='Esay';
				 }
				 echo $g;
				 ?>
                </td>
              </tr>
               <tr>
                <td><span class="required">*</span>Tanggal Mulai:</td>
                <td>
                 <?php echo $m[5];?>
                </td>
              </tr>
              <tr>
                <td><span class="required">*</span>Tanggal Akhir:</td>
                <td>
                <?php echo $m[6];?>
                </td>
              </tr>
              
             
              <tr>
                <td><span class="required">*</span>Keterangan:</td>
                <td>
                <?php echo $m['keterangan'];?>
                </td>
              </tr>
              <?php if($f==1){?>
              <tr>
                <td><span class="required">*</span>Download File:</td>
                <td><a href="../upload/<?php echo $m['file']?>" target="_blank">Download</a></td>
              </tr>
              <?php }?>
            </table>
            
            
            <?php 
			
			$k=$m[3];
			echo $k;
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
              <table class="list" id="module2">
                <thead>
                  <tr>
                    <td class="left">No</td>
                    <td height="29" class="left">Jawaban Soal<?php  $l=$m[3];	if($l!=2){$tg='Pilihan Berganda';}else{$tg='Esay';}echo $tg;?></td>
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
                    <td class="left"><input type="text" name="jawab_<?php echo $n?>"  style="width:100%"></td>
                  </tr>
                  <?php $n++; }?>
                </tbody>
              </table>
             
                <input type="submit" value="save" name="simpan"  />
                </p>
                    </form>
                      </div>
                  </div>
                  </div>