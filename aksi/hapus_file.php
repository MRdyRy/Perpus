<?php
include "koneksi.php";
session_start();
$idnya= $id;
$carifilenya = "select * from tb_file where id_file = '$idnya'";
$ambil = mysql_query($carifilenya);
while($namanya = mysql_fetch_array($ambil)){
$namafile = $namanya['isi_file'];
unlink("../ebook/".$namafile);
}

?>