<?php 
$id=$_GET['id'];
include "../config/koneksi.php";
$w=mysql_query("select * from jurusan where id_jrsn='$id'");
$d=mysql_fetch_array($w);
?>
<script>
$(document).ready(function(){
$("#kode").click(function(){
$("#ok").html("");
});
$("#cancel").click(function(){
$("#kode").val("");
$("#nama").val("");
});
$("#save").click(function(){
var kode=$("#kode").val();
var nama=$("#nama").val();

$.ajax({
url:"jurusan/editData.php",
data:"kode="+kode+"&nama="+nama,
success:function(){
$("#kode").val("");
$("#nama").val("");
$("#ok").html("<div class='warning'>Berhasil Input Data <span>/</span>&nbsp;<a href='?page=jurusan/dataJurusan'>Lihat Data</a></div>");
}
})
});

})
</script>
<div class="heading">
      <h1><img src="../image/product.png" alt="" /> Edit Jurusan</h1>
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
                <td><span class="required">*</span> Kode Jurusan:</td>
                <td><input type="text" name="kode" size="80"  id="kode" value="<?php echo $d[1]?>" readonly />
                  </td>
              </tr>
             
              
              
              <tr>
                <td><span class="required">*</span>Nama Jurusan:</td>
                <td><input type="text" name="nama" value="<?php echo $d[2]?>" size="80" id="nama" /></td>
              </tr>
            </table>
            </form>
            <div id="ok"></div>
            
          </div>
                  </div>
                  </div>