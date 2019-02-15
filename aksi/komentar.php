<style>
.komentar {padding:5px;}
.pesan {height:400px;width:500px; padding:5px; border:1px solid #c5c5c5}
.pesannya1 {background:#EAEAEA;margin-bottom:8px;margin-top:5px;}
.pesannya2 {background:#D1D1D1;margin-bottom:8px;margin-top:5px;}
.komentar .pesan {overflow-y:scroll}
.namanya1{padding:5px;background:#669999;border-radius:5px;font-weight:bold;border-bottom:2px solid #000;color:#fff;margin-left:3px;text-transform:uppercase;}
.namanya2{padding:5px;background:#CC9999;border-radius:5px;font-weight:bold;border-bottom:2px solid #000;color:#fff;margin-left:3px;text-transform:uppercase;}
.isipesan{margin-left:10px;margin-top:5px;}
</style>
<div id="komentar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="inputlLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body" id="auah">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
        <div class="komentar">
        <div class="pesan">
        
<?php

 include "../koneksi.php";
 
 $carikomentar = "select * from tb_komentar WHERE id_file = '$idnyaf' order by id_komentar desc";
 $ambil_komentar = mysql_query($carikomentar);
 $is = 1;
 while($isikomentar = mysql_fetch_array($ambil_komentar)){
 $id_usernya = $isikomentar['id_user'];
 $komentarnya = $isikomentar['komentar'];
?>
        	<div class="pesannya1">
        	<a class="namanya1" href="#"><?php $caripengkomen = "SELECT * FROM tb_user WHERE id_user = '$id_usernya'";
												$ambilpengkomen = mysql_query($caripengkomen);
												while($pengkomen=mysql_fetch_array($ambilpengkomen)){
												echo $pengkomen['nama'];} ?>&nbsp;:</a>
            <p class="isipesan"><?php echo $komentarnya; ?></p>
            
            </div>
        
        
      </div>
        
        </div>
        
        
        
   
        <div class="form-group">
        <label class="col-sm-2 control-label" for="komentar">
        Komentar&nbsp;:
        </label>
        <div class="col-sm-8">
        <form action="" method="post">
        <textarea class="form-control" rows="3" placeholder="Tulis komentar disini !" name="komentar"></textarea>
        </div>
        </div><!--akhir deskripsi-->
        
        <button type="submit" class="btn btn-primary" name="kirim"><strong>post !</strong></button><br><br>

<button type="submit" class="btn btn-default" data-dismiss="modal"><strong>tutup</strong></button>
        </form>
        </div>
 </div></div>
        <?php } ?>
  
 
 <?php
 if(isset($_POST['kirim'])){
 $id_file = $idnyaf;
 $id_user = $_SESSION['id_user'];
 $komentar = $_POST['komentar'];
 
 $query = "INSERT INTO `tb_komentar`(`id_file`, `id_user`, `komentar`) VALUES ('$id_file','$id_user','$komentar')";
 $jalankan = mysql_query($query);
 if($jalankan){echo '<script>alert("Komentar berhasil dipost !");</script>';}else{echo '<script>alert("Komentar gagal dipost !");</script>';}
 
 }
 
 
 ?>
