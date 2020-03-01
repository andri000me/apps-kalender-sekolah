<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
		<table width="881" height="237" border="0" align="center">
		  <tr>
		    <td colspan="4">
            	<center>
                		<h2>
                	Biodata Anda
                    	</h2>
                </center>
            </td>
            
		    <td width="287" rowspan="5">
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
		    <td width="179">NIS</td>
		    <td width="45">:</td>
		    <td width="351"><?php echo $_SESSION['nis']?></td>
	      </tr>
		  <tr>
		    <td>Nama Siswa</td>
		    <td>:</td>
		    <td><?php echo $_SESSION['username']?></td>
	      </tr>
		  <tr>
		    <td>Password</td>
		    <td>:</td>
		    <td><?php echo $_SESSION['password']?></td>
	      </tr>
		  <tr>
		    <td>Alamat</td>
		    <td>:</td>
		    <td><?php echo $_SESSION['alamat']?></td>
	      </tr>
	  </table>
</body>
</html>
