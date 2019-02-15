<?php
	include "../koneksi.php"; 
	$id_user = $data['id_user'];
	$cari = "select * from tb_user where id_user = '$id_user'";
	$ambil = mysql_query($cari);
	while($isinya = mysql_fetch_array($ambil)){
	$nama = $isinya['nama'];	}?>