<?php 
include "../config/koneksi.php";

?>
<link href="./../css/dataTables.css" rel="stylesheet">

<script type="text/javascript" language="javascript" src="./../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="./../js/custom.tables.js"></script>
<div class="heading">
      <h1><img src="../image/product.png" alt="" /> Jawaban Soal</h1>
      <div class="buttons"><a  class="button" id="save">Save</a><a  class="button" id="cancel">Cancel</a></div>
    </div>
     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        <a href="#" title="English" /> English</a>
                      </div>
                    <div id="language1">
                   
                   
                   <div id="container">
			<div class="box">
            	<div class="box-content nopadding">
					<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable" >
						<thead>
							<tr>
								<th>No</th>
									<th>Kode Soal</th>
									<th>Nama Siswa</th>
								<th>Deskripsi</th>
								<th>Jenis</th>
                                <th>Tanggal Mulai</th>
								<th>Tangal Akhir</th>
                                <th>Keterangan</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php 
					
						$no=1;
					$nis=$_SESSION['nis'];
						include "../config/koneksi.php";
						$q=mysql_query("select  tugas.*,jawaban.id_siswa,siswa.nama_siswa from tugas join jawaban on tugas.kd_tugas=jawaban.kd_tugas join siswa on jawaban.id_siswa=siswa.nis where jawaban.id_siswa='$nis' ");
						while($data=mysql_fetch_array($q)){
						?>
							<tr class="gradeX">
								<td><?php echo $no; ?></td>
								<td>
									<?php echo $data[2]?>
									</td>
									<td>
									<?php echo $data[10]?>
									</td>
								<td>
									<?php echo $data[3]?>
									</td>
								<td><?php
								
								 $j=$data[4];
								 if($j==1){
								 $jenis='Pilihan Ganda';
								 }
								 elseif($j==2){
								 $jenis='Esay';
								 }
								 else{
								 $jenis='Esay dan Pilihan Ganda';
								 }
								 echo $jenis;
								 ?></td>
                                 <td><?php echo $data[5]?></td>
                                  <td><?php echo $data[6]?></td>
                                   <td><?php echo $data[8]?></td>
								<td class="center"><A href="?page=detailJawaban&id=<?php echo $data[2]?>&amp;sis=<?php echo $data[9]?>">View</A></td>
								
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