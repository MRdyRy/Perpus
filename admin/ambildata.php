<?php
include "../koneksi.php";
$id = $_GET['q'];
if($id){
	$query = mysql_query("select * from tb_user where id = $id");
		while($data=mysql_fetch_array($query)){
			echo $data['nama'];
			echo $data['npm'];
			echo $data['jenis_kelamin'];
			echo $data['tempat'];
			echo $data['tgl'];
			echo $data['fakultas'];
			echo $data[''];
		}
	}
?>