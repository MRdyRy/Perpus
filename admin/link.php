<?php
$pilih =$_GET['pilih'];
if(empty($pilih) or $pilih=="kembali"){
	include "kelolauser.php";
}else if($pilih=="kelolauser"){
	include "kelolauser.php";
}else if($pilih=="kelolabuku"){
	include "kelolabuku.php";
}else if($pilih=="keloladata"){
	include "keloladata.php";
}else if($pilih=="profil"){
	include "profil.php";
}else if($pilih=="inputbuku"){
	include "input.php";
}else if($pilih=="cetakkartu"){
	include "cetakkartu.php";
}else if($pilih=="cari"){
	include "cari.php";
}else if($pilih=="pesan"){
	include "pesan.php";
}else{
	echo "salah menu";
}
?>