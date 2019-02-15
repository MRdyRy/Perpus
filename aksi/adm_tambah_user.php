<?php
include "../koneksi.php";
session_start();

if(isset($_POST['nambah'])){
$level = $_POST['level'];
$nama = addslashes($_POST['nama']);
$npm = addslashes($_POST['npm']);
$jeke = addslashes($_POST['jeke']);
$tmp = addslashes($_POST['tmp']);
$tgl = addslashes($_POST['tgl']);
$fakultas = addslashes($_POST['fakultas']);
$prodi = addslashes($_POST['prodi']);
$syarat = $_POST['syarat'];

$query = "insert into tb_user values('','$level','$nama','$npm','$tmp','$tgl','$fakultas','$prodi','$jeke','$syarat','');";
$insert = mysql_query($query);
if($insert){ echo '<script>alert ("berhasil menambahkan user");</script>';
			header("location:/perpus/admin/?hal=kelolauser");
	}else{  echo '<script>alert ("Data gagal ditambahkan");</script>';
		    echo "<meta http-equiv='refresh' content='0; url=?hal=kelolauser'>";
		}
}
?>