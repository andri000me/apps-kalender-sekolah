<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<center>
		<table width="1016" height="237" border="0" align="center">
		  <tr>
		    <td colspan="4">
            	<center>
                		<h2>
                	Biodata Anda
                    	</h2>
                </center>
            </td>
            <td width="325" rowspan="5">
            	<img src="/skripsikalendar/admin/guru/imgguru/<?php echo $_SESSION['foto']?>" width="78%" height="69%" />
            </td>
		    <td width="284" rowspan="5">
	<center>
	  <p><img src="img/nusput.jpg" />
		  <br/>
		  <font color="grey" size="7">SMA Nusa Putra</font>
		  <br/><br/>
		  <font size="4">
	      Kalender Siswa
	      </font></p>
    </center>
            </td>
	      </tr>
		  <tr>
		    <td width="102">NIP</td>
		    <td width="35">:</td>
		    <td width="247"><?php echo $_SESSION['username']?></td>
	      </tr>
		  <tr>
		    <td>Nama Anda</td>
		    <td>:</td>
		    <td><?php echo $_SESSION['nama_guru']?></td>
	      </tr>
          <tr>
		    <td>Nama Anda</td>
		    <td>:</td>
		    <td><?php echo $_SESSION['mata_pelajaran']?></td>
	      </tr>
          <tr>
          	<td colspan="3">&nbsp;
            	
            </td>
          </tr>
          </table>
	</center>
</body>
</html>
