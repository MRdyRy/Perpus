
<?php
include "../koneksi.php";
session_start();
$query = "select * from tb_file where id_file = '$_GET[id]'";
$a = mysql_query($query);
while($data = mysql_fetch_array($a)){
$idnyaf = $data['id_file'];
$filenya = $data['isi_file'];
$lokasi = "../ebook/".$data['isi_file'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PERPUSTAKAAN DIGITAL</title>
<link rel="shortcut icon" type="image/x-icon" href="../pengaturan/icon/accessories_dictionary.png" />
<link rel="stylesheet" href="../pengaturan/css/bootstrap.min.css" />
</head>

<!--scriptnya-->
<!--akhir blok script-->
<style>
body{background-image:url(../pengaturan/img/patter.png);background-repeat:repeat;}
.putih{background:#FFFFFF}
li:hover{background:#111;opacity:0.5}
#ebooknya{ height:580px;width:700px;padding:5px;border:2px solid #e1e1e1;margin-top:5px;margin-bottom:5px;margin-left:5px;}

#scrol{height:250px;overflow-y:scroll;overflow-style:marquee-line;}
</style>

<body>
<div class="container" style="background:#fdfdfd">
<div class="row">
        	<div class="col-md-7">
            <div class="putih">
            <iframe id="ebooknya" src="<?php echo $lokasi ?>"></iframe>
            </div>
            </div>
            
            <div class="col-md-4" style="float:right">
            <?php
$idnya = $data['id_user'];
$cari_user = "SELECT * FROM tb_user WHERE id_user = '$idnya'";
$ambil = mysql_query($cari_user);
while ($usernya = mysql_fetch_array($ambil)) { 
$id = $usernya['id_user'];
$nama = $usernya['nama'];
$npm = $usernya['npm'];
$ttl = $usernya['tempat'].', '.$usernya['tgl'];
$jurusan = $usernya['prodi'];?>
<div>

<div class="well" style="margin-top:10px;">
<h4><?php echo $data['judul_file']; ?> Diupload Oleh :</h4>
	<table width="600" border="0" class="table table-responsive">
  <tr>
    <td>NAMA </td>
    <td>:&nbsp;<?php echo $nama ?></td>
    <?php
	
$carifoto = "SELECT * FROM tb_foto where id_user = '$id'";
$ambilfoto = mysql_query($carifoto);
while($fotonya = mysql_fetch_array($ambilfoto)){
$lokasi_foto = "../foto/".$fotonya['foto']; 
	?>
    <td><img class="img-responsive img-rounded" style="height:114px;width:86px;"src="<?php echo $lokasi_foto ?>" alt="<?php echo $nama ?>"><?php } ?></td>
  </tr>
  <tr>
    <td>TTL </td>
    <td>:&nbsp;<?php echo $ttl ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>PRODI </td>
    <td>:&nbsp;<?php echo $jurusan ?></td>
    <td><button type="button" data-toggle="modal" data-target="#komentar" class=" btn btn-default btn-sm">Komentar <span class="badge">+ <?php $r = "SELECT * FROM tb_komentar WHERE id_file = '$idnyaf'"; $ha = mysql_query($r); $itunganya = mysql_num_rows($ha); echo $itunganya; ?></span></button></td>
  </tr>
</table>



	<div class="serupa" style="border-top:2px solid #e5e5e5">
    <center><strong><p style="border-bottom:2px solid #e5e5e5">Lainnya Oleh <?php echo $nama ?></p></strong></center>
    <div style="border:2px solid #e5e5e5;padding:5px;" id="scrol">
    <table class=" table table-responsive table-hover">
    <tr style="font-weight:bold"><td>NO</td><td>JUDUL</td><td colspan="2"><center>OPSI</center></td></tr>
	<?php
	$serupa = "SELECT * FROM tb_file WHERE id_user = '$data[id_user]' order by id_file desc";
	$ambilserupa = mysql_query($serupa);
	$nomoru=1;
	while($ini = mysql_fetch_array($ambilserupa)){
	echo '<tr><td>'.$nomoru++.'</td><td><img src="../pengaturan/img/pdf.gif"> '.$ini['judul_file'].'</td><td><a href="../aksi/bacaebookn.php?id='.$ini['id_file'].'"><button class ="btn btn-primary btn-xs">Baca</button></a></td></tr>';
	}
	?>
    </table>
    </div>
    </div>


</div>
            

    


</div>
</div>
</div>



<div class="nav navbar navbar-fixed-bottom navbar-inverse">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
<div class="navbar-header">
<a class="navbar-brand" href="#" style="font-family:'Times New Roman', Times, serif">PERPUSTAKAAN DIGITAL</a>
</div>
<div>

<div class="collapse navbar-collapse" id="menu">
<ul class="nav navbar-nav navbar-right" style="margin-right:20px;">
<li class="active"><a href="#">Baca Ebook</a></li>
<li><a href="../proses_beranda.php">Beranda</a></li>
<li><a href="../proses_caribuku.php">Cari buku</a></li>
<li><a href="../logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>

</ul>
</div>
</div>
</div>
<?

}



}//akhir while data paling atas
?>
</body>

<script src="../pengaturan/js/transition.js"></script>
<script src="../pengaturan/js/modal.js"></script>
<script src="../pengaturan/js/jquery.min.js"></script>
<script src="../pengaturan/js/bootstrap.js"></script>


<!--KOMENTARNYA -->
<style>
.komentar {padding:5px;}
.pesan {height:400px;width:500px; padding:5px; border:1px solid #c5c5c5}
.pesannya1 {background:#EAEAEA;margin-bottom:8px;margin-top:5px;}
.pesannya2 {background:#D1D1D1;margin-bottom:8px;margin-top:5px;}
.komentar .pesan {overflow-y:scroll}
.namanya1{padding:5px;background:#669999;border-radius:5px;font-weight:bold;border-bottom:2px solid #000;color:#fff;margin-left:3px;text-transform:uppercase;}
.namanya2{padding:5px;background:#CC9999;border-radius:5px;font-weight:bold;border-bottom:2px solid #000;color:#fff;margin-left:3px;text-transform:uppercase;}
.isipesan1{margin-left:10px;margin-top:5px; padding:5px;}
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
 
 $carikomentar = "select * from tb_komentar WHERE id_file = '$idnyaf' order by id_komentar asc";
 $ambil_komentar = mysql_query($carikomentar);
 $is = 1;
 while($isikomentar = mysql_fetch_array($ambil_komentar)){
 $id_usernya = $isikomentar['id_user'];
 $komentarnya = $isikomentar['komentar'];
 $is++;
?>
        	<div class="pesannya1">
                  

        	<a class="namanya<?php if(($is%2)==0){ echo "1";}else{echo "2";} ?>" href="#"><?php $caripengkomen = "SELECT * FROM tb_user WHERE id_user = '$id_usernya'";
												$ambilpengkomen = mysql_query($caripengkomen);
												while($pengkomen=mysql_fetch_array($ambilpengkomen)){
												echo $pengkomen['nama'];} ?>&nbsp;:</a>
            <p class="isipesan1"><?php echo $komentarnya; ?></p>
            
            
            </div>
            <h6>dikirim : <em><?php echo $isikomentar['datetime']; ?></em></h6>
        
        <?php } ?>
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
        
  
 
 <?php
 if(isset($_POST['kirim'])){
 $id_file = $idnyaf;
 $id_user = $_SESSION['id_user'];
 $komentar = $_POST['komentar'];
 
 $query = "INSERT INTO `tb_komentar`(`id_file`, `id_user`, `komentar`,`datetime`) VALUES ('$id_file','$id_user','$komentar',NOW())";
 $jalankan = mysql_query($query);
 if($jalankan){echo '<script>alert("Komentar berhasil dipost !");</script>';
 				echo "<meta http-equiv='refresh' content='0; url=bacaebookn.php?id=$idnyaf'>";}else{echo '<script>alert("Komentar gagal dipost !");</script>';}
 
 }
 
 
 ?>

<!--KOMENTARNYA -->


</html>
