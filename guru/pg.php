<?php include "../config/koneksi.php";
  $id=$_GET['id'];
  $query=mysql_query("select * from tugas where kd_tugas='$id'");
  while($data=mysql_fetch_array($query)){
  ?>
  			<a href="/skripsiKalendar/upload/<?php echo $data['file']; ?>">
  		<embed src="/skripsiKalendar/upload/<?php echo $data['file']; ?>" 
    quality="hight"
    width="1300"
    height="792"
    ></embed>
    		</a>
  <?php } ?>