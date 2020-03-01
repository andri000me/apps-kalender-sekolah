
<link href="../../css/dataTables.css" rel="stylesheet">
<script src="../../js/jquery-2.0.0.min.js"></script>
<script type="text/javascript" language="javascript" src="../../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="../../js/custom.tables.js"></script>

<script>
function set(nis,nama,alamat,jurusan) {
var a = "<?php echo $_GET['var']; ?>";
a = a.split("_")[1];
window.opener.document.getElementsByName('nis_'+a)[0].value = nis;
window.opener.document.getElementsByName('nama_'+a)[0].value = nama;
window.opener.document.getElementsByName('alamat_'+a)[0].value = alamat;
window.opener.document.getElementsByName('jurusan_'+a)[0].value = jurusan;


window.close();

}
</script>

     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        
                      </div>
                    <div id="language1">
                   
                   
                   <div id="container">
			<div class="box">
            	<div class="box-content nopadding">
<h2 style="margin-left:20px">Data Siswa</h2>
					<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable" >
						<thead>
							<tr>
								<th>No</th>
								<th>NIS</th>
								<th>NAMA</th>
                                <th>ALAMAT</th>
                                 <th>JURUSAN</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php 
						$no=1;
						include "../../config/koneksi.php";
						$q=mysql_query("select siswa.*,jurusan.nama_jrsn from siswa join jurusan on siswa.id_jrsn=jurusan.id_jrsn ");
						while($data=mysql_fetch_array($q)){
						?>
							<tr class="gradeX">
								<td><?php echo $no; ?></td>
								<td>
									<?php echo $data[1]?>
									</td>
								<td><?php echo $data[2]?></td>
                                <td><?php echo $data[4]?></td>
                                <td><?php echo $data[6]?></td>
								<td class="center"><img src="../../image/success.png"  onclick="set('<?php echo $data[1]?>','<?php echo $data[2]?>','<?php echo $data[4]?>','<?php echo $data[6]?>');"/></td>
								
							</tr>
                            <?php $no++;}?>
							
						
						</tbody>
						
					</table>
				</div>
			</div>		
		</div>
	
                   
                   
            
          </div>
                  </div>
                  </div>