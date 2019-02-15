<?php 
/* 
	validasi biar ga bisa masuk tanpa login
*/
$npm=$_SESSION['npm'];
$sql=mysql_query("SELECT * FROM tb_user where npm ='$npm' and level='1'");
$data=mysql_fetch_array($sql);
if(($npm != $data['npm']) or (empty($npm))){
	echo "<script>document.location='../logout.php';</script>";
}
/* 
	Akhir validasi biar ga bisa masuk tanpa login
*/

?>

