<?php 
include "../config/koneksi.php";

?>
<link href="./../css/dataTables.css" rel="stylesheet">

<script type="text/javascript" language="javascript" src="./../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="./../js/custom.tables.js"></script>
<div class="heading">
      <h1><img src="../image/product.png" alt="" /> Laporan Tugas dan Nilai Siswa </h1>

    </div>
     <div class="content">
<div id="tab-general">
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
                                <th>Nilai</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php 
					
						$no=1;
					    
						include "../config/koneksi.php";
						$q=mysql_query("select 
							 tugas.*,
							 nilai.*,
							 jawaban.id_siswa,
							 siswa.nama_siswa
							  from tugas 
							  join jawaban on tugas.kd_tugas=jawaban.kd_tugas 
							  join nilai on tugas.kd_tugas=nilai.kd_tugas 
							  join siswa on jawaban.id_siswa=siswa.nis  ");
						while($data=mysql_fetch_array($q)){
						?>
							<tr class="gradeX">
								<td><?php echo $no; ?></td>
								<td>
									<?php echo $data[2]?>
									</td>
									<td>
									<?php echo $data['nama_siswa']?>
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
                                   <td><?php echo $data['nilai']?></td>
								
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