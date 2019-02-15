<?php
include "../koneksi.php";

$id	= isset($_GET['id']) ? $_GET['id'] : "";
$sql = "delete from tb_user where id_user = '$id'";
$que = mysql_query($sql);
if($que){
echo '<script> alert("berhasil dihapus")</script>';
header("location:/perpus/admin/?hal=kelolauser");
}else{
echo '<script> alert("berhasil dihapus")</script>';
header("location:/perpus/admin/?hal=kelolauser");
}
?>