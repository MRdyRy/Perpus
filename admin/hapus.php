<?php
include "../koneksi.php";
session_start();
$id	= isset($_GET['id']) ? $_GET['id'] : "";
$carinama = "select * from tb_file where id_file = '$id'";
$nampungnama = mysql_query($carinama);
while ( $data = mysql_fetch_array($nampungnama)) {
$nama_file = $data['isi_file'];
if (unlink($nama_file);) {
	echo '<script>alert ("berhasil dihapus");</script>';

$query = "delete from tb_file where id_file = '$id'";
$hasil = mysql_query($sql);
   }else {
   	echo "gagal dihapus";
   }
}
if($hasil){
header("location:/perpus/admin/?hal=kelolabuku");
}else{
echo "<meta http-equiv='refresh' content='0; url=?hal=kelolabuku'>";
}

?>