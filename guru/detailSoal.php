<?php 
include "../config/koneksi.php";
$id=$_GET['id'];
$tgl=date("Y-m-d");
$d=mysql_query("select * from tugas where kd_tugas='$id'");
$m=mysql_fetch_array($d);

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
            </table>
            
            
            	<br/>
                <?php
				$dete=mysql_query("select * from tugas where kd_tugas='$_GET[id]' AND jenis='1'");
				while($data=mysql_fetch_array($dete)){
				
				?>
                	Tampilkan Soal Pilihan Ganda
                	<a href="?page=pg&id=<?php echo $data['kd_tugas']; ?>">
            <input type="button" value="View" />
            		</a>
            	<?php } ?>
            <br/><br/><br/>
            
              <table id="module" class="list" >
                <thead>
                  <tr>
                    <td class="left">No</td>
                    <td height="29" class="left">Soal</td>
					<td height="29" class="left">Jawaban</td>
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
                                     </div>
                  </div>
                  </div>