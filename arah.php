<?php
$pilih =$_GET['pilih'];
if(empty($pilih) or $pilih=="beranda"){
	include "beranda.php";
}else if($pilih=="caribuku"){
	include "caribuku.php";
}else if($pilih=="uploadebook"){
	include "uploadebook.php";
}else if($pilih=="profil"){
	include "profil.php";
}else if($pilih=="aktifitas"){
	include "aktifitas.php";
}else{
	echo "salah menu";
}