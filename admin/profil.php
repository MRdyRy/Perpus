<?php
include "../koneksi.php";
$s = "select * from tb_user where npm = '$_SESSION[npm]'";
$q = mysql_query($s);
?>
<link href="../pengaturan/css/bootstrap.min.css" rel="stylesheet" />

<!--akhir css sma botstrap-->
</head>

<body style="background-image:url(../pengaturan/img/noisy_grid.png);background-repeat:repeat;">

<div class="panel panel-default" style="margin-right:20px;margin-top:7px;">
<div class="panel-heading" style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold">
<h3 class="panel-title">
HALAMAN PROFIL</h3>
</div>
	<div class="panel-body">
		<table width="600" border="0" class="table-responsive table table-">
  <tr>
  <?php while ($data = mysql_fetch_array($q)) { ?>
    <td>Nama :&nbsp;<?php echo $data['nama']; ?></td>
    <td class="img-responsive img-thumbnail img-rounded"><img style="height:113px; width:92px;" src="<?php $querynya = "SELECT * FROM tb_foto WHERE id_user ='$data[id_user];'"; $hasil = mysql_query($querynya); while($fotonya = mysql_fetch_array($hasil)){ $lokasi_foto ="../foto/".$fotonya['foto']; echo $lokasi_foto; } ?>" alt="<?php echo "foto".$data['nama'];  ?>"></td>
  </tr>
  <tr>
    <td>Password  :&nbsp;<?php echo $data['npm']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Jenis Kelamin :&nbsp;<?php echo $data['jenis_kelamin']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tempat Lahir :&nbsp;<?php echo $data['tempat']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Tanggal Lahir :&nbsp;<?php echo $data['tgl']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Jurusan :&nbsp;<?php echo $data['prodi']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Fakultas :&nbsp;<?php echo $data['fakultas']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="border: 1px dashed #000;background:#CCCCCC;"><form role="form" action="../proses_upload_foto.php" method="post" enctype="multipart/form-data">Upload Foto : <input type="file" name="file" id="file">
<p class="help-block">Ukuran Foto Maksimal 1Mb</p> <button type="submit" name="unggah" class="btn btn-success">Upload</button></form></td>
    <td>&nbsp;</td>
    <?php } ?>
  </tr>
</table>

    </div>
</div>