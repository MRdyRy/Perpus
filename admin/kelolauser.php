<?php
include "../koneksi.php";
include "../pengaturan/script/buka_user.js";
$query = "select * from tb_user order by level";
$hasil = mysql_query($query);
$total = mysql_num_rows($hasil);
?>

<style>
#tmbh{margin-bottom:10px; float:left; margin-top:-35px;}</style>
<div id="tmbh">
</div>
</div>





    <button style="margin-bottom:5px;float:left" type="button" class="btn btn-sm btn-success" name="tambah" data-toggle="modal" data-target="#tambah">+<span class="glyphicon glyphicon-user"></span>&nbsp; Tambah User</button> <button onclick="buka();" style="margin-bottom:5px;float:left;margin-left:4px;" type="button" class="btn btn-sm btn-primary" name="cari"><span class="glyphicon glyphicon-search"></span>&nbsp; Cari User</button>
    
    <?php include "data.user.php"; ?>
    
    
     </div>
 <!--modal edit user-->

                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header" id="uzz">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"><h3><p class="text-center text-info text-capitalize">Halaman Edit User</p></h3></h4>
        </div>
        <div class="modal-body" id="auah">
          <form class="form-horizontal" action="edit_user.php">
          
          <div class="form-group">
          <label class="control-label col-sm-2">Nama :</label>
          <div class="col-sm-7">
          <input name="nama" type="text" class="form-control" value="<?php echo $data[nama]; ?>" />
          </div></div>
          
          <div class="form-group">
          <label class="control-label col-sm-2">NPM :</label>
          <div class="col-sm-7">
          <input name="npm" type="text" class="form-control" value="<?php echo $data['npm']; ?>" />
          </div></div>
          
          <div class="form-group">
          <label class="control-label col-sm-2">Prodi :</label>
          <div class="col-sm-7">
          <input name="tempat" type="text" class="form-control" value="<?php echo $data['prodi']; ?>" />
          </div></div>
          
          <div class="form-group">
          <label class="control-label col-sm-2">Fakultas :</label>
          <div class="col-sm-7">
            <input name="nama2" type="text" class="form-control" value="<?php echo $data['fakultas']; ?>" />
          </div>
          </div>
         
          </form>
        </div>
        <div class="modal-footer" id="uzz">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>

      </div>
    </div>
  </div>  
 <!--akhir modal edit user-->
 
 
  <!--modal tambah user-->

 <div id="tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tambahlLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header" id="uzz">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="tambahLabel"><h3><p class="text-center text-info text-capitalize">Halaman Tambah User <span class="glyphicon glyphicon-user"> </span></p></h3></h4>
        </div>
        <div class="modal-body" id="auah">
          <form class="form-horizontal" method="post" action="../aksi/adm_tambah_user.php">
          
          <div class="form-group">
                	<label for="Level" class="col-sm-2 control-label">Level </label>
                    <div class="col-sm-7">
                    <select class="form-control" id="level" name="level" required>
                    <option>--------Pilih------</option>
                    <option value="1">admin</option>
                    <option value="2">user</option>\
                    </select>
                    </div>
            </div>
          
          <div class="form-group">
          <label class="control-label col-sm-2">Nama :</label>
          <div class="col-sm-7">
          <input name="nama" type="text" class="form-control" placeholder="Masukan Nama Lengkap" autocomplete="off" required />
          </div></div>
          
          <div class="form-group">
          <label class="control-label col-sm-2">NPM :</label>
          <div class="col-sm-7">
          <input name="npm" type="text" class="form-control" placeholder="Masukan NPM" required />
          </div></div>
          
          <div class="form-group">
            <label for="radio" class="col-sm-3 control-label">Jenis Kelamin</label>
           <div class="col-sm-5">
           <label class="radio-inline">
           <input type="radio" id="jeke" name="jeke" value="L" />Laki-laki</label>
           <label class="radio-inline">
           <input type="radio" id="jeke" name="jeke" value="P" />Perempuan</label>
            </div>
            </div>
            
            <div class="form-group">
            <label for="tempat" class="col-sm-2 control-label">Tempat Lahir</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="tmp" id="tmp" placeholder="Masukan Tempat lahir" autocomplete="off" required />
            </div>
            </div>
            
            <div class="form-group">
            <label for="tgl" class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-7">
            <input type="text" class="form-control input" name="tgl" id="datepicker" placeholder="contoh : 04-12-1995" autocomplete="off" required/>
           
            </div>
            </div>
          
          <div class="form-group">
                	<label for="Fakultas" class="col-sm-2 control-label">Fakultas </label>
                    <div class="col-sm-7">
                    <select class="form-control" id="fakultas" name="fakultas" required>
                    <option>--------Pilih------</option>
                    <option value="FHTMIPA">Fakultas MATEMATIKA & IPA</option>
                    <option value="FTBAHASA">Fakultas BAHASA</option>
                    <option value="FSENI">Fakultas SENI</option>
                    <option value="FSASTRA">Fakultas Sastra</option>
                    </select>
                    </div>
            </div>
                    
                    <div class="form-group">
                	<label for="Prodi" class="col-sm-2 control-label">Prodi </label>
                    <div class="col-sm-7">
                    <select class="form-control" id="prodi" name="prodi" required>
                    <option>-----Pilih-----</option>
                    <optgroup label="FTMIPA">
                    <option value="Informatika">Informatika</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="Industri">Industri</option>
                    <option value="Matematika">Matematika</option>
                    </optgroup>
                    <optgroup label="FIPPS">
                    <option value="Konseling">Konseling</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="IPS">IPS</option>
                    </optgroup>
                    <optgroup label="FBS">
                    <option value="Sastra">Sastra</option>
                    <option value="Inggris">Inggris</option>
                    <option value="DKV">DKV</option>
                    </optgroup>
                    
                    </select>
                    </div>
                    </div>      
                       
                      <div>
                    <p><input type="checkbox" name="syarat" value="Y" required/> Anda menyetujui <btn class="btn-link">persyaratan</btn> dan mengisi form ini dengan informasi yang valid, dan dapat dipertanggungjawabkan di kemudian hari</p>
                    </div>
          
        <div class="modal-footer" id="uzz">
        	<button type="submit" class="btn btn-success" name="nambah">Tambah</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          </form>
        </div>
		</div>
      </div>
    </div>
    
 <!--akhir modal tmbah user-->