<?php
session_start();
include "koneksi.php";
$a = 2;
if(isset($_POST['dftar'])){
$level = $_POST[$a];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$jeke = $_POST['jeke'];
$tmp = $_POST['tmp'];
$tgl = $_POST['tgl'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];
$syarat = $_POST['syarat'];
$query = mysql_query("insert into tb_user VALUES ('null',$level','$nama','$npm',$jeke','$tmp','$tgl','$fakultas,$prodi,'null');");
	if(!$query){
	echo "gagal";
	header("location:c.php");
		}else{
	echo  "berhasil";
	echo "<meta http-equiv='refresh' content='0; url=../perpus/index.php'>";
		}
		}

?>