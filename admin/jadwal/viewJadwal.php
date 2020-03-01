<?php
include "../config/koneksi.php";
$id=$_GET['id'];
$a=mysql_query("select jadwal.*,guru.nama_guru,kelas.nama_kls  from jadwal join guru on jadwal.id_guru=guru.id_guru join kelas on jadwal.id_kls=kelas.id_kls where jadwal.id_jdwl='$id'");
$f=mysql_fetch_array($a);
?>


<div class="heading">

      <h1><img src="../image/product.png" alt="" /> View Jadwal</h1>
 
    
    </div>
     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        <a href="#language1"><img src="../guru/view/image/flags/gb.png" title="English" /> English</a>
                      </div>
                    <div id="language1">
                    <form method="post">     
            <table class="form" >
              <tr>
                <td><span class="required">*</span> Kode Jadwal:</td>
                <td><input type="text" name="kode" size="80" value="<?php echo $f[1]?>" id="kode" readonly />
                </td>
              </tr>
             
              
              
              
               <tr>
                <td><span class="required">*</span>Jam:</td>
                <td><input type="text" name="jam" value="<?php echo $f[3]?>" size="80" id="jam" /></td>
              </tr>
               <tr>
                <td><span class="required">*</span>Guru:</td>
                <td>
                <select name="guru">
                <option><?php echo $f[6]?></option>
                </select>
                </td>
              </tr>
              
              <tr>
                <td><span class="required">*</span>Kelas:</td>
                <td>
                <select name="kelas">
                <option><?php echo $f[7]?></option>
                </select>
                </td>
              </tr>
            </table>
            
            
            <hr />
            <h2>DATA SISWA</h2>
            <table id="module" class="list" >
      <thead>
            <tr>
              <td class="left">Nis</td>
              <td class="left">Nama:</td>
              <td class="left">Alamat:</td>
              <td class="left">Jurusan:</td>
          
            </tr>
        </thead>
        <tbody>
        <?php
		$rt=mysql_query("select jadwal_detail.id_jdwl,siswa.*,jurusan.nama_jrsn from jadwal_detail join siswa on jadwal_detail.id_siswa=siswa.nis join jurusan on siswa.id_jrsn=jurusan.id_jrsn where jadwal_detail.id_jdwl='$f[1]' ");
		while($o=mysql_fetch_array($rt)){ ?>
            <tr>
              <td class="left"><?php echo $o[2]?></td>
              <td class="left"><?php echo $o[3]?></td>
              <td class="left"><?php echo $o[5]?></td>
              <td class="left"><?php echo $o[7]?></td>
            </tr>
            <?php }?>
      </tbody>
                             
        </table>
     
            </form>
            <div id="ok"></div>
            
          </div>
                  </div>
                  </div>