<?php
include "../koneksi.php";
session_start();
$query = "select * from tb_file where id_file = '$_GET[id]'";
$a = mysql_query($query);
while($data = mysql_fetch_array($a)){

$lokasi = "../ebook/".$data['isi_file'];
?>

<html>
<head>
<title>Baca Ebook</title>
<link href="../pengaturan/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
<style>
#baca{float:left;}
#ebook{height:600px;; width:700px; padding:5px; background:#000;}
#keterangan{float:right}
</style>
<div id="baca">
<iframe id="ebook" src="<?php echo $lokasi ?>"></iframe>

</div>
	<div id="navigasi">
    <!--ngetes-->
<?php
$idnya = $data['id_user'];
$cari_user = "SELECT * FROM tb_user WHERE id_user = '$idnya'";
$ambil = mysql_query($cari_user);
while ($usernya = mysql_fetch_array($ambil)) { 
$nama = $usernya['nama'];
$npm = $usernya['npm'];
$ttl = $usernya['tempat'].', '.$usernya['tgl'];
$jurusan = $usernya['prodi'];
$lokasi_foto = "../foto/".$usernya['foto']; ?>
<div id="keterangan">
	<div class="container">
    <p>Diupload Oleh : </p>
   <ul class="list-inline">
   <li>Nama : <?php echo $nama ?></li>
   <li><img src="<?php $lokasi_foto ?>"></li>
   </ul>
   <ul>
   <li>TTL : <?php echo $ttl ?></li>
   <li>Jurusan : <?php echo $jurusan ?></li>
   </ul>

    </div>
</div>


<?

}



}//akhir while data paling atas
?>



		</div>
</body>
