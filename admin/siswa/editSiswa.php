<?php 
include "../config/koneksi.php";
$id=$_GET['id'];
$h=mysql_query("select siswa.*,jurusan.nama_jrsn from siswa join jurusan on siswa.id_jrsn=jurusan.id_jrsn where siswa.id_siswa='$id'");

$j=mysql_fetch_array($h);
?>
<script>
$(document).ready(function(){
$("#nis").click(function(){
$("#ok").html("");
});
$("#cancel").click(function(){
$("#nis").val("");
$("#nama").val("");
});
$("#save").click(function(){
var nis=$("#nis").val();
var nama=$("#nama").val();
var password=$("#password").val();
var alamat=$("#alamat").val();
var jurusan=$("#jurusan").val();
$.ajax({
url:"siswa/editData.php",
data:"nis="+nis+"&nama="+nama+"&password="+password+"&alamat="+alamat+"&jurusan="+jurusan,
success:function(){
$("#nis").val("");
$("#nama").val("");
$("#password").val("");
$("#alamat").val("");
$("#ok").html("<div class='warning'>Berhasil Input Data <span>/</span>&nbsp;<a href='?page=siswa/dataSiswa'>Lihat Data</a></div>");
}
})
});

})
</script>
<div class="heading">
      <h1><img src="../image/product.png" alt="" />Edit Siswa</h1>
      <div class="buttons"><a  class="button" id="save">Save</a><a  class="button" id="cancel">Cancel</a></div>
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
                <td><span class="required">*</span> Nis:</td>
                <td><input type="text" name="nis" size="80" value="<?php echo $j[1]?>" id="nis" readonly />
                  </td>
              </tr>
             
              
              
              <tr>
                <td><span class="required">*</span>Nama Siswa:</td>
                <td><input type="text" name="nama" value="<?php echo $j[2]?>" size="80" id="nama" /></td>
              </tr>
              <tr>
                <td><span class="required">*</span>Password:</td>
                <td><input type="text" name="password" value="<?php echo $j[3]?>" size="80" id="password" /></td>
              </tr>
              <tr>
                <td><span class="required">*</span>Alamat:</td>
                <td><textarea name="alamat" id="alamat" rows="5" cols="40"><?php echo $j[4]?></textarea></td>
              </tr>
              <tr>
                <td><span class="required">*</span>Jurusan:</td>
                <td>
                <select id="jurusan">
                <option value="<?php echo $j[5]?>"><?php echo $j[6]?></option>
                <?php 
				include "../config/koneksi.php";
				$q=mysql_query("select * from jurusan");
				while($d=mysql_fetch_array($q)){
				?>
                <option value="<?php echo $d[0]?>"><?php echo $d[2]?></option>
				<?php }
				
				?>
                </select>
                </td>
              </tr>
            </table>
            </form>
            <div id="ok"></div>
            
          </div>
                  </div>
                  </div>