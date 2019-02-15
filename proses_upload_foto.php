<?php
include "koneksi.php";
session_start();

if(isset($_POST['unggah'])){

$directori = 'foto/';
$nama_file = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$maks = 1000000;
$tipe = strtolower(substr($nama_file,strpos($nama_file, '.') + 1));
$tmp_nama = $_FILES['file']['tmp_name'];

if(!empty($nama_file)){
	if(($tipe == 'jpg' || $tipe == 'gif' || $tipe == 'bmp' || $tipe == 'bitmap' || $tipe == 'png' || $tipe == 'jpeg')&& $ukuran<=$maks){
		$upload = copy($tmp_nama, "foto/".$nama_file);
		
		if(!$upload){
			echo "foto anda gagal diupload";
			} else {
				$cari_id_user=mysql_query("select (id_user)as id_user from tb_user where npm='".$_SESSION['npm']."'");
				$ambil_id_user=mysql_fetch_array($cari_id_user);
				$id_user=$ambil_id_user['id_user'];
				$simpan_file=mysql_query("insert into tb_foto 
		values('','$id_user','$nama_file')");
		
		
		
	if($simpan_file){
			
			if($_SESSION['level']==1 ){
			header("location:admin/?hal=profil");
			}else if($_SESSION['level'] == 2){
			
			header("location:user/index.php?pilih=profil");}
			
		}else if(!$simpan_file){
			echo "Foto Terupload namun gagal tersimpan!!! <br> Silahkan upload Foto anda";
			unlink("foto/".$nama_file);
		}

			}
	   } else{
	   	echo '<script> alert ("file harus berupa image (foto)"); </script>';
	   }

    }
}
?>