<?php


$db_host	= "localhost";
$db_user	= "root";
$db_pass	= "";
$db_name	= "db_perpustakaan";

$konek	= mysql_connect($db_host,$db_user,$db_pass,$db_name) or die ("Gagal koneksi ke server");
mysql_select_db($db_name, $konek) or die ("Gagal mengaktifkan database".mysql_error());

?>