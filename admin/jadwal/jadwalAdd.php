<?php
include "../config/koneksi.php";

	if(isset($_POST["simpan"]))
	{
		$kode=$_POST["kode"];
		$tanggal=date("Y-m-d");
		$jam=$_POST['jam'];
	    $guru=$_POST['guru'];
		$kelas=$_POST['kelas'];
		
	$query1=mysql_query("insert into jadwal(kd_jdwl,tgl_jdwl,jam,id_guru,id_kls) values('$kode','$tanggal','$jam','$guru','$kelas')");
		
		$jml = $_POST['jml'];
		for ($x=0;$x<=$jml-1;$x++) {
			$tmpNis = "nis_$x";
			$nis =$_POST[$tmpNis];
			$sale = mysql_query("INSERT INTO jadwal_detail(id_siswa,id_jdwl) values('$nis','$kode')");
		
		}
	}
?>
<script>
function getData(tmpObject) {
	var strNama = tmpObject.name;
	var x = strNama.split("_")[1];
	window.open('jadwal/getData.php?var=' + strNama ,"mywindow","menubar=1,resizable=1,width=1900,height=600");

}
</script>
<script>
$(document).ready(function(){
    idrow = 2;
 $("#addRow").bind('click',function(){
    var rw=document.getElementById("jml").value;
 
     var x=document.getElementById('module').insertRow(idrow);
	var tmpName="";
	var td1=x.insertCell(0); 
	var td2=x.insertCell(1); 
	var td3=x.insertCell(2); 
	var td4=x.insertCell(3);

   tmpName = 'nis_' + (idrow-1);
	td1.innerHTML="<input type='text' id="+tmpName+ "  name="+tmpName + " onclick='getData(this)'  >"; 
	tmpName = "nama_"+(idrow-1);
	td2.innerHTML="<input type='text' id="+tmpName+ " name="+tmpName + "  class='"+tmpName+" ' readonly>"; 
	tmpName="alamat_"+(idrow-1);
	td3.innerHTML="<input type='text' id="+tmpName+"  name="+tmpName + "  class='"+tmpName+" ' onblur='amountWet(this)' readonly>";
	tmpName="jurusan_"+(idrow-1);
	td4.innerHTML="<input type='text' id="+tmpName+" name="+tmpName+" class='"+tmpName+" ' readonly >";
	idrow++;
	document.getElementById("jml").value = idrow-1;
        
       	


   
 });
 
 
 
// Remove row when clicked
	$("#delete").live('click',function(){
		if(idrow>2) { 
	var x=document.getElementById('module').deleteRow(idrow-1); 
	idrow--; 
	document.getElementById("jml").value = idrow-1;
      
	}
	});
   	
     
});


	

</script>

<div class="heading">

      <h1><img src="../image/product.png" alt="" /> Add Jadwal</h1>
 
    
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
                <td>
                	<?php 
  include"../config/koneksi.php";
  $id=$_GET['id'];
$cek=mysql_query("select max(id_jdwl)as id from jadwal");
$dap=mysql_fetch_array($cek);
$r=$dap['id']+1;
{
  ?>
                <input type="text" name="kode" size="80" value="JDWL-<?php echo $r ?>" id="kode" readonly="readonly" />
                <?php }?>
                </td>
              </tr>
             
              
              
              
               <tr>
                <td><span class="required">*</span>Jam:</td>
                <td>
                	<select name="jam" id="jam">
                    	<option>08:00</option>
                        <option>09:00</option>
                        <option>10:00</option>
                        <option>11:00</option>
                        <option>13:00</option>
                        <option>14:00</option>
                        <option>15:00</option>
                        <option>16:00</option>
                    </select>
                </td>
              </tr>
               <tr>
                <td><span class="required">*</span>Guru:</td>
                <td>
                <select name="guru">
                <?php 
				$q=mysql_query("select * from guru");
				while($d=mysql_fetch_array($q)){
				?>
				<option value="<?php echo $d[0]?>"><?php echo $d[2]?>---<?php echo $d[3]?></option>
				<?php }?>
                </select>
                </td>
              </tr>
              
              <tr>
                <td><span class="required">*</span>Kelas:</td>
                <td>
                <select name="kelas">
                <?php 
				$qw=mysql_query("select * from kelas");
				while($da=mysql_fetch_array($qw)){
				?>
				<option value="<?php echo $da[0]?>"><?php echo $da[2]?></option>
				<?php }?>
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
            <tr>
              <td class="left"><input type="text" name="nis_0" readonly  onclick="getData(this)"></td>
              <td class="left"><input type="text" name="nama_0" readonly ></td>
              <td class="left"><input type="text" name="alamat_0"readonly ></td>
              <td class="left"><input type="text" name="jurusan_0" readonly ></td>
            </tr>
      </tbody>
                             
        </table>
        <input type="text" name="jml"  id="jml"  value='1' readonly="readonly">
        <a  class="button" id="addRow">Add </a>&nbsp;&nbsp;<a id="delete" class="button">Remove </a><br /><br />
        <input type="submit" value="save" name="simpan"  />
            </form>
            <div id="ok"></div>
            
          </div>
                  </div>
                  </div>