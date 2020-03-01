<?php 
include "../config/koneksi.php";

if(isset($_POST['simpan'])){
$judul=$_POST['judul'];
$jenis=$_POST['jenis'];
$keterangan=$_POST['keterangan'];
$tanggal_infrm=date('Y-m-d');
$fileName = $_FILES['file']['name'];
$q=mysql_query("insert into informasi(judul,jenis,file_infrm,keterangan,tanggal_infrm)
values
('$judul','$jenis','$fileName','$keterangan','$tanggal_infrm')")or die(mysql_error());
move_uploaded_file($_FILES['file']['tmp_name'],'./../upload/'.$fileName);
header("location:admin.php?page=data_infrm");
}
?>
<div class="heading">

      <h1><img src="../../image/product.png" alt="" /> Add Tugas</h1>
 
    
      
    </div>
     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        <a href="#language1"><img src="../../guru/view/image/flags/gb.png" title="English" /> English</a>
                      </div>
                    <div id="language1">
                    <form method="post" enctype="multipart/form-data">     
            <table class="form" >
             <tr>
                <td><span class="required">*</span>Judul Informasi :</td>
                <td><input type="text" name="judul" value="" size="80" id="desc" required /></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Jenis Informasi :</td>
                <td>
                <select name="jenis">
               	 <option>Mata Pelajaran</option>
                 <option>Jadwal Ulangan</option>
                 <option>Jadwal Ujian</option>
                </select>
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