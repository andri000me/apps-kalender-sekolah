
<div class="heading">
      <h1><img src="../image/product.png" alt="" /> Add Guru</h1>
      <div class="buttons"><a  class="button" id="save">Save</a><a  class="button" id="cancel">Cancel</a></div>
    </div>
     <div class="content">
<div id="tab-general">
          <div id="languages" class="htabs">
                        <a href="#language1"><img src="../guru/view/image/flags/gb.png" title="English" /> English</a>
                      </div>
                    <div id="language1">
                    <form action="guru/saveGuru.php" method="post" enctype="multipart/form-data" name="form1" >
            <table class="form" >
              <tr>
                <td><span class="required">*</span> NIP:</td>
                <td>
                	<?php 
						  include"../config/koneksi.php";
							$cek=mysql_query("select max(id_guru)as id from guru");
							$dap=mysql_fetch_array($cek);
							$r=$dap['id']+1;
							{
				  ?>
                <input type="text" name="kode" size="80" id="kode" value="<?php echo date('ymd');echo $r?>" required />
                	<?php }?>
                  </td>
              </tr>
             
              
              
              <tr>
                <td><span class="required">*</span>Nama Guru:</td>
                <td><input type="text" name="nama" value="" size="80" id="nama" required /></td>
              </tr>
              
              <tr>
                <td><span class="required">*</span>Password:</td>
                <td><input type="text" name="password" value="" size="80" id="password" required /></td>
              </tr>
              <td><span class="required">*</span>Foto:
              </td>
              <td>
              <input type="file" name="foto" id="foto" class="textfield" required />
              </td>
              <tr>
              <td>
              <input type="submit" name="simpan" id="simpan" value="Simpan" />
              </td>
              </tr>
            </table>
            </form>
            
          </div>
                  </div>
                  </div>