<?php 
include "../config/koneksi.php";

if(isset($_POST['simpan'])){
$idkode=$_POST['idkode'];
$kode=$_POST['kode'];
$desc=$_POST['desc'];
$jenis=$_POST['jenis'];
$awal=$_POST['awal'];
$akhir=$_POST['akhir'];
$keterangan=$_POST['keterangan'];
$fileName = $_FILES['file']['name'];
$q=mysql_query("insert into tugas(id_jdwl,deskripsi,tgl_mulai,tgl_akhir,keterangan,jenis,file,kd_tugas)values('$kode','$desc','$awal','$akhir','$keterangan','$jenis','$fileName','$idkode')")or die(mysql_error());
move_uploaded_file($_FILES['file']['tmp_name'],'./../upload/'.$fileName);
header("location:admin.php?page=dataSoal");
}
?>
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
				$x=mysql_query("select * from jadwal");
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