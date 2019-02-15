<?php
include "koneksi.php";
session_start();
$query = "SELECT * FROM tb_user where npm = '$_SESSION[npm]'";
$hasil = mysql_query($query);
while($data = mysql_fetch_array($hasil)){
$level = $data['level'];

if($level == 1){
header("location:admin");
}else{
header("location:user");
}

}
?>