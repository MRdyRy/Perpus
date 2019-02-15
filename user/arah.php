<?php
error_reporting(0);
$pilih = $_GET['pilih'];
if(empty($pilih) or $pilih=="kembali"){
	include "user.php";
}else if($pilih=="caribuku"){
	include "caribuku.php";
}else if($pilih==""){
	include "halbaca.php";
}else if($pilih=="uploadebook"){
	include "upload_ebook.php";
}else if($pilih=="profil"){
	include "profil.php";
}else if($pilih=="aktifitas"){
	include "aktifitas.php";
}else{
	echo "salah pilih";
}
?>