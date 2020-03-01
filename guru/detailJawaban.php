<?php 
include "../config/koneksi.php";
$id=$_GET['id'];
$s=$_GET['sis'];

$ck=mysql_query("select * from nilai where kd_tugas='$id' and  kd_siswa='$s'");
$num=mysql_num_rows($ck);

$tgl=date("Y-m-d");
$d=mysql_query("select tugas.*,jadwal.kd_jdwl from tugas join jadwal on tugas.id_jdwl=jadwal.id_jdwl where tugas.kd_tugas='$id'");
$m=mysql_fetch_array($d);
if(isset($_POST['simpan'])){
$nilai=$_POST['nilai'];
$tgl=date("Y-m-d");
$sd=mysql_query("insert into nilai(kd_tugas,kd_siswa,nilai,tgl)values('$id','$s','$nilai','$tgl')");

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
					<td height="29" class="left">Jawaban Esay</td>
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
					<td class="left"><?php echo $dat[4]?></td>
                  </tr>
                  <?php $n++; }?>
                </tbody>
              </table>
              <?php }?>
              
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
				
				$n=1;
		
				$det=mysql_query("select * from jawaban_detail where kd_tugas='$_GET[id]' and id_siswa='$s'");
				while($dat=mysql_fetch_array($det)){
				
				?>
                  <tr>
                    <td class="left"><?php echo $n?></td>
                    <td class="left"><?php echo $dat['jwbn']?></td>
                  </tr>
                  <?php $n++; }?>
                </tbody>
              </table>
             
                
                </p>
				<?php 
                    if($num>0){
$jk=mysql_query("select * from nilai where kd_tugas='$id' and  kd_siswa='$s'");
$kl=mysql_fetch_array($jk);
echo "Hasil Penilaian :&nbsp;&nbsp;$kl[3]";
}
else{
echo "<form method='post'>Masukkan Nilai Siswa :&nbsp;&nbsp;<input type='text' name='nilai' required><input type='submit' name='simpan' value='simpan nilai' class='button' required></form>";
}
?>
					
				
				
				
                      </div>
                  </div>
                  </div>