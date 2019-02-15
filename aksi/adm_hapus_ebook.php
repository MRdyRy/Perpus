<?php
include "../koneksi.php";
$id	= isset($_GET['id']) ? $_GET['id'] : "";
include "hapus_file.php";
$sql = "delete from tb_file where id_file = '$id'";
$query = mysql_query($sql);


if($query){
header("location:/perpus/admin/?hal=kelolabuku");
}else{
echo "<meta http-equiv='refresh' content='0; url=?hal=kelolabuku'>";
}

?>