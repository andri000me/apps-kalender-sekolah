
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
						include "../config/koneksi.php";
						$q=mysql_query("select * from informasi");
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