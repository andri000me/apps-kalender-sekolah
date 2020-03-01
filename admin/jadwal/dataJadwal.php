
<link href="./../css/dataTables.css" rel="stylesheet">

<script type="text/javascript" language="javascript" src="./../js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="./../js/custom.tables.js"></script>
<div class="heading">
      <h1><img src="../image/product.png" alt="" /> Data Jadwal</h1>
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
								<th>Kode Jadwal</th>
								<th>Tanggal</th>
                                <th>Jam</th>
                             
                                <th>Guru Pengajar</th>
                                   <th>Kelas</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                        <?php 
						$no=1;
						include "../config/koneksi.php";
						$q=mysql_query("select jadwal.*,guru.nama_guru,kelas.nama_kls  from jadwal join guru on jadwal.id_guru=guru.id_guru join kelas on jadwal.id_kls=kelas.id_kls");
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
								<td><?php echo $data[3]?></td>
                                <td><?php echo $data[6]?></td>
                                <td><?php echo $data[7]?></td>
								<td class="center"><a href="admin.php?page=jadwal/viewJadwal&id=<?php echo $data[0]?>">View Jadwal </a></td>
								
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