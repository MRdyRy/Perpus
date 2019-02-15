<?php
include "../koneksi.php";
session_start();
$ip = $_SERVER['REMOTE_ADDR'];

function ipnya($ip){
global $ip;
$query = "SELECT `ip` FROM `tb_ip` WHERE `ip` = '$ip'";
$hasil = mysql_query($query);
$cek = mysql_num_rows($hasil);
if($cek == 0){
return false;
}else if ($cek >= 1){
return true;
}
		}

function iptmbh($ip){
	$query = "INSERT INTO `tb_ip` VALUES ('$ip')";
	$jalankan = mysql_query($query);

}

function update_itung(){
$query = "SELECT `lihat` FROM `tb_lihat`";
	if(@$hasil = mysql_query($query)){
		$itung = mysql_result($hasil, 0, 'lihat');
		$itungtambah = $itung + 1;
		echo $itungtambah;
$queryupdate = "UPDATE `tb_lihat` SET `lihat` = '$itungtambah'";
@$jalankanupdate = mysql_query($queryupdate);
}

	}
}

if(!ipnya($ip)){
update_itung();
iptmbh($ip);
}
?>
