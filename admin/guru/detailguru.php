<?php 
include "../config/koneksi.php";
$id=$_GET['id'];
$g=mysql_query("select * from guru where id_guru='$id'");
$y=mysql_fetch_array($g);
?>
<link href="./../css/dataTables.css" rel="stylesheet">

<script type="text/javascript" language="javascript" src="./../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="./../js/custom.tables.js"></script>
<div class="content">
<div id="tab-general">
<div id="language1">
                   
                   
                   <div id="container">
			<div class="box">
            	<div class="box-content nopadding">
                		<table width="1042">
                        	<tr>
                            <td>
					<table border="0" align="center" cellpadding="0" cellspacing="0" class="table-dt table-striped-dt table-bordered-dt dataTable" id="dt-example" >
  <tr>
    <td colspan="5">Detail Guru</td>
  </tr>
  <tr>
    <td width="468" rowspan="4">
    	<img src="/skripsikalendar/admin/guru/imgguru/<?php echo $y['foto']?>" width="100%" height="100%" />
    </td>
    <td width="129" rowspan="4">&nbsp;</td>
    <td width="119" height="25">Nip</td>
    <td width="40">:</td>
    <td width="278"><?php echo $y[1]?></td>
  </tr>
  <tr>
    <td height="34">Nama</td>
    <td>:</td>
    <td><?php echo $y[2]?></td>
  </tr>
  <tr>
    <td height="47">Mata Pelajaran</td>
    <td>:</td>
    <td><?php echo $y[3]?></td>
  </tr>
  <tr>
    <td height="47">Password</td>
    <td>:</td>
    <td><?php echo $y[4]?></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
</table>
</td></tr></table>
