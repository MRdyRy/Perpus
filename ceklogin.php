<?php
session_start();
include "koneksi.php";

//cek udah dipencet belom tombol loginnya dari form login
if(isset($_POST['loginf'])){
$nama=mysql_real_escape_string(trim($_POST['nama']));
$npm=mysql_real_escape_string(trim($_POST['npm']));


//sql injek proteksi
$cari=mysql_query("select * from tb_user where npm = '$npm' and nama='$nama'");
//cek tb user
$cek = mysql_num_rows($cari);
//jika cocok nama sma npm
if($cek==1){
$data = mysql_fetch_array($cari);//fetch data sql
$level = $data['level'];
if($level==1)
{
	$_SESSION['id_user']=$data['id_user'];
	$_SESSION['nama']=$data['nama'];
	$_SESSION['npm']=$data['npm'];
	$_SESSION['level']=$data['level'];
	header("location:admin");
	}
	else
	{
	$_SESSION['id_user']=$data['id_user'];
	$_SESSION['nama']=$data['nama'];
	$_SESSION['npm']=$data['npm'];
	$_SESSION['level']=$data['level'];
	header("location:user");
	}
}else{
	echo '<script> alert("Maaf anda gagal login, silahkan cek nama & npm anda ketika login, atau anda belum terdaftar!");</script>';
	echo "<script>document.location='index.php'</script>";
	}
}
?>