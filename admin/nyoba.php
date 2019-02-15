<?php
include "../koneksi.php";
$perhal = 5;
$isi = mysql_query("select * from tb_file");
$itung = mysql_num_rows($isi);


$halaman = ceil($itung/$perhal);

for($i=1; $i<=$halaman; $i++){
while($tampil = mysql_fetch_array($isi)){
echo $tampil['judul_file'].'<br>';}
}
?>