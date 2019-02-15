<link rel="stylesheet" href="../pengaturan/css/bootstrap.min.css" />
<?php
include "../koneksi.php";
session_start();

$id	= isset($_GET['id']) ? $_GET['id'] : "";
$cariuser = "SELECT * FROM tb_user WHERE id_user = '$id'";
$ambildata = mysql_query($cariuser);
while($tampil = mysql_fetch_array($ambildata)){
?>

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
          <input name="nama" type="text" class="form-control" value="<?php echo $tampil['nama'];?>" placeholder="Masukan Nama Lengkap" autocomplete="off" required />
          </div></div>
          
          <div class="form-group">
          <label class="control-label col-sm-2">NPM :</label>
          <div class="col-sm-7">
          <input name="npm" type="text" class="form-control" value="<?php echo $tampil['npm']; ?>" placeholder="Masukan NPM" required />
          </div></div>
          
          <div class="form-group">
            <label for="radio" class="col-sm-3 control-label">Jenis Kelamin</label>
           <div class="col-sm-5">
           
           <?php if ($tampil['jenis_kelamin'] === "L") { ?>
           <label class="radio-inline">
           <input type="radio" id="jeke" name="jeke" value="L" checked />Laki-laki</label>
           <label class="radio-inline">
           <input type="radio" id="jeke" name="jeke" value="P" />Perempuan</label>
           <?php }else { ?>
           <label class="radio-inline">
           <input type="radio" id="jeke" name="jeke" value="L"/>Laki-laki</label>
           <label class="radio-inline">
           <input type="radio" id="jeke" name="jeke" value="P" checked/>Perempuan</label>
           <?php }  ?>
            </div>
            </div>
            
            <div class="form-group">
            <label for="tempat" class="col-sm-2 control-label">Tempat Lahir</label>
            <div class="col-sm-7">
            <input name="tmp" type="text" class="form-control" id="tmp" value="<?php echo $tampil['tempat']; ?>" placeholder="Masukan Tempat lahir" autocomplete="off" required />
            </div>
            </div>
            
            <div class="form-group">
            <label for="tgl" class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-7">
            <input name="tgl" type="text" class="form-control input" id="datepicker" value="<?php echo $tampil['tgl']; ?>" placeholder="contoh : 04-12-1995" autocomplete="off" required/>
           
            </div>
            </div>
          
          <div class="form-group">
                	<label for="Fakultas" class="col-sm-2 control-label">Fakultas </label>
                    <div class="col-sm-7">
                    <select class="form-control" id="fakultas" name="fakultas" required="required" values="<?php echo $tampil['jurusan'];?>" />
                    <option >--------Pilih------</option>
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
                    <select class="form-control" id="prodi" name="prodi" required value="<?php echo $tampil['prodi']; ?>">
                    <option>--------Pilih--------</option>
                    <option value="bhs inggris">Bhs Inggris		-----S1</option>
                    <option value="teknik informatika">Teknik Informatika	-S1</option>
                    <option value="sastra">Sastra		  -------S1</option>
                    <option value="dkv">DKV			---------S1</option>
                    </select>
                    </div>
                    </div>      
        </form>


<?php
	

}

?>