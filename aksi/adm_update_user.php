<?php 
include "../koneksi.php";

$id = isset($_GET['id']) ? $_GET['id'] : "";
$nama = addslashes($_POST['nama']);
$npm = trim(addslashes($_POST['npm']));
$jeke = trim(addslashes($_POST['jeke']));
$tmp = trim(addslashes($_POST['tmp']));
$tgl = trim(addslashes($_POST['tgl']));
$jurusan = trim(addslashes($_POST['prodi']));
$fakultas = trim(addslashes($_POST['fakultas']));

$query = "update tb_user set nama ='$nama', npm ='$npm',tempat='$tempat',tgl='$tgl',fakultas='$fakultas',prodi='$prodi',jenis_kelamin='$jeke',foto='$foto'";
if($query){
echo '<script> alert ("data berhasil diperbaharui");<script>';
header("location:/perpus/admin/?hal=kelolauser");
}else{
echo '<script> alert ("data gagal disimpan didatabase");</script>';
header("location:/perpus/admin/?hal=kelolauser");}
?>