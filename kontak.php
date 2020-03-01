
<link href="css/dataTables.css" rel="stylesheet">
<div class="heading">
      <h1><img src="../image/product.png" alt="" /> Data Jadwal</h1>
     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        <a href="#" title="English" /> English</a>
                      </div>
                    <div id="language1">
                   
                   
                   <div id="container">
			<div class="box">
            	<div class="box-content nopadding">
                		<center>
                        	<h3>Mata Pelajaran</h3>
                        </center>
					<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable" >
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Jenis</th>
                                <th>Keterangan</th>
                                <th>Tanggal Informasi</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php 
						$no=1;
						include "config/koneksi.php";
						$q=mysql_query("select * from informasi where jenis='mata pelajaran'");
						while($data=mysql_fetch_array($q)){
						?>
							<tr class="gradeX">
								<td><?php echo $no; ?></td>
								<td>
									<?php echo $data[1]?>
									</td>
                                    <td>
									<?php echo $data[2]?>
									</td>
								<td><?php echo $data['keterangan']?></td>
                                <td><?php echo $data['tanggal_infrm']?></td>
								<td class="center">
                                	<a href="/skripsiKalendar/upload/<?php echo $data['file_infrm']; ?>">View</a>
                                </td>
							</tr>
                            <?php $no++;}?>
							
						
						</tbody>
						
					</table>
				</div>
			</div>		
		</div>
        <br/><br/>
        <div class="box">
            	<div class="box-content nopadding">
                		<center>
                        	<h3>Jadwal Ulangan</h3>
                        </center>
					<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable" >
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Jenis</th>
                                <th>Keterangan</th>
                                <th>Tanggal Informasi</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php 
						$no=1;
						include "config/koneksi.php";
						$q=mysql_query("select * from informasi where jenis='Jadwal Ulangan'");
						while($data=mysql_fetch_array($q)){
						?>
							<tr class="gradeX">
								<td><?php echo $no; ?></td>
								<td>
									<?php echo $data[1]?>
									</td>
                                    <td>
									<?php echo $data[2]?>
									</td>
								<td><?php echo $data['keterangan']?></td>
                                <td><?php echo $data['tanggal_infrm']?></td>
								<td class="center">
                                	<a href="/skripsiKalendar/upload/<?php echo $data['file_infrm']; ?>">View</a>
                                </td>
							</tr>
                            <?php $no++;}?>
							
						
						</tbody>
						
					</table>
				</div>
			</div>		
		</div>
        
        <br/><br/>
        <div class="box">
            	<div class="box-content nopadding">
                		<center>
                        	<h3>Jadwal Ujian</h3>
                        </center>
					<table id="dt-example" cellpadding="0" cellspacing="0" border="0" class="table-dt table-striped-dt table-bordered-dt dataTable" >
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Jenis</th>
                                <th>Keterangan</th>
                                <th>Tanggal Informasi</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php 
						$no=1;
						include "config/koneksi.php";
						$q=mysql_query("select * from informasi where jenis='Jadwal Ujian'");
						while($data=mysql_fetch_array($q)){
						?>
							<tr class="gradeX">
								<td><?php echo $no; ?></td>
								<td>
									<?php echo $data[1]?>
									</td>
                                    <td>
									<?php echo $data[2]?>
									</td>
								<td><?php echo $data['keterangan']?></td>
                                <td><?php echo $data['tanggal_infrm']?></td>
								<td class="center">
                                	<a href="/skripsiKalendar/upload/<?php echo $data['file_infrm']; ?>">View</a>
                                </td>
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