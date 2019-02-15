<?php 
include "../koneksi.php"; ?>
<link rel="stylesheet" href="../pengaturan/css/bootstrap.min.css">
<body>

<!---stylenya-->
<style>
body{background-image:url(../pengaturan/img/noisy_grid.png); background-repeat:repeat;}
img:hover{background-color:#999999;}
#garis{border:1px dotted #666666; margin-right:10px;}
#usernya{ margin-right:10px;}
#scrol{height:250px;overflow-y:scroll;overflow-style:marquee-line;}
#data{font-weight:bold}
</style>
<div class=" container-fluid">
<div id="usernya" class="dropdown">
<p>Selamat Datang,<a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo $_SESSION['nama']; ?><b class="caret"></b></a></p>
<ul class="dropdown-menu">
							<li><a href="logout.php"><i class="icon-off"></i> Logout</a></li></ul>
</div>
<div id="garis">
</div>
<table class="table-responsive text-center table-condensed" width="600" border="0">
  <tr>
    <td><a href="index.php?pilih=caribuku"><img class="img-responsive img-thumbnail" src="../pengaturan/icon/mp_viewer.png"></a></td>
    <td><a href="index.php?pilih=uploadebook"><img class="img-responsive img-thumbnail" src="../pengaturan/icon/document_new.png"></a></td>
    <td><a href="index.php?pilih=profil"><img class="img-responsive img-thumbnail" src="../pengaturan/icon/user_info.png"></a></td>
    
  </tr>
  <tr class="text-primary" style=" font-weight:bold">
    <td>Cari Buku</td>
    <td>Upload Ebook</td>
    <td>Profile</td>
  </tr>
</table>
<div id="garis">
</div><br>

<div class="row">
<div class="col-md-7">
<div class="panel panel-info">
	<div class="panel-heading">
    <?php
	$cari_id_user=mysql_query("select (id_user)as id_user from tb_user where npm='".$_SESSION['npm']."'");
	$ambil_id_user=mysql_fetch_array($cari_id_user);
	$id_user=$ambil_id_user['id_user'];
	?>
    	<h4 class="panel-title">
        <a data-toogle="collapse" data-parent="#accordion" href="#infopinjam">
        Kontribusi ebook yang telah Diupload
        </a></h4>
    </div><!--info buku-->
    <div id="infopinjam" class="panel-collapse collapse">
    <div class="panel-body" id="scrol">
    <table class="table table-striped table-hover table-responsive">
    <thead>
    <tr> <th>NO</th>
    <th>Judul Buku</th>
    <th>Kategori</th> 
    <th>Tgl Upload</th>
    <th>Opsi</th>
    </tr>
    <?php				
	$cari_buku = "SELECT * FROM tb_file WHERE id_user = '$id_user'";
	$ambilbuku = mysql_query($cari_buku);
	$i=1; while($bukunya = mysql_fetch_array($ambilbuku)){
	?>
     
    </thead> 
    <tr>
    <td><?php echo $i++ ?></td> 
    <td><?php echo $bukunya['judul_file']; ?></td> 
    <td><?php echo $bukunya['kategori'];?></td> 
    <td><?php echo $bukunya['tgl_upload']; ?></td>
    <td><a href="bacaebookn.php?id=<?php echo $bukunya['id_file']; ?>"><button type="button" class="btn btn-primary btn-sm" title="Baca"><span class="glyphicon glyphicon-search"></span></button></a></td> 
    </tr> 
    
    <?php  
	
	}?>
    </table>
    </div>
    </div>
</div><!--info peminjaman-->
</div><!--col-md-6-->
<?php
$datauser = "SELECT * FROM tb_user where npm = '$_SESSION[npm]'";
$ambildata = mysql_query($datauser);
while($isinya = mysql_fetch_array($ambildata)){
$id_user = $isinya['id_user'];
?>
<div class="col-md-4" style="margin-top:-15px;">
<h4>Data Anda</h4>
<table class="table table-responsive well">
<tr>
<td>NAMA</td>
<td id="data">:</td>
<td><?php echo $isinya['nama'];?></td>
<?php  $query2 = "SELECT * FROM 	tb_foto where id_user = '$id_user'";
  $hasil = mysql_query($query2);
  while( $data = mysql_fetch_array($hasil)){ 
		$fotonya = $data['foto'];
		$lokasi_foto = "../foto/".$data['foto']; ?>

<td><img class="img-responsive img-rounded img-thumbnail" height="114px;" width="92px" src="<?php echo $lokasi_foto;?>"><?php } ?><button class="btn btn-link"></button></td></td>
</tr>
<tr>
<td>NPM</td>
<td id="data">:</td>
<td><?php echo $isinya['npm'];?></td>
<td></td>
</tr>
<tr>
<td>PRODI</td>
<td id="data">:</td>
<td><?php echo $isinya['prodi'];?></td>
<td></td>
</tr>
<tr>
<td>TTL</td>
<td id="data">:</td>
<td><?php echo $isinya['tempat'].', '.$isinya['tgl'];?></td>
<td></td>
</tr>

</table>
</div>
<?php } ?>
</div><!--info peminjaman-->
</div><!--col-md-6-->
</div><!--row-->
<script type="text/javascript">
$(function () { $('#infopinjam').collapse('show')});
</script>
</div><!--fluid-->
</body>