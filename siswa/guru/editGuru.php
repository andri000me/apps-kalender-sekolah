<?php 
include "../config/koneksi.php";
$id=$_GET['id'];
$g=mysql_query("select * from guru where id_guru='$id'");
$y=mysql_fetch_array($g);
?>
<script>
$(document).ready(function(){
$("#kode").click(function(){
$("#ok").html("");
});
$("#cancel").click(function(){
$("#kode").val("");
$("#nama").val("");
$("#password").val("");
});
$("#save").click(function(){
var kode=$("#kode").val();
var nama=$("#nama").val();
var password=$("#password").val();
$.ajax({
url:"guru/editData.php",
data:"kode="+kode+"&nama="+nama+"&password="+password,
success:function(){
$("#kode").val("");
$("#nama").val("");
$("#password").val("");
$("#ok").html("<div class='warning'>Berhasil Input Data <span>/</span>&nbsp;<a href='?page=guru/dataGuru'>Lihat Data</a></div>");
}
})
});

})
</script>
<div class="heading">
      <h1><img src="../image/product.png" alt="" /> Add Guru</h1>
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
                <td><span class="required">*</span> NIP:</td>
                <td><input type="text" name="kode" size="80" value="<?php echo $y[1]?>" id="kode"  readonly/>
                  </td>
              </tr>
             
              
              
              <tr>
                <td><span class="required">*</span>Nama Guru:</td>
                <td><input type="text" name="nama" value="<?php echo $y[2]?>" size="80" id="nama" /></td>
              </tr>
              
              <tr>
                <td><span class="required">*</span>Password:</td>
                <td><input type="text" name="password" value="<?php echo $y[4]?>" size="80" id="password" /></td>
              </tr>
            </table>
            </form>
            <div id="ok"></div>
            
          </div>
                  </div>
                  </div>