<?php
include "../koneksi.php";

mysql_close($konek);
$date = date('d-m-Y-g-i-s');
$file = "backup_db_perpustakaan@".$date.".sql";

$perintah = "mysqldump -u root db_perpustakaan > backup/$file";
$backup = exec($perintah);

//header nama file yang didownload
header("Content-Disposition:attachment; filename = $file");
//header ukuran filenya
header("Content-length:$file");
//header tipe filenya
header("Content-type:$file");

//proses membaca file yg akan didownload dari folder data
$fp = fopen("backup/".$file,"r");
$isi = fread($fp,filesize('backup/'.$file));
fclose($fp);

//menampilkan isi
echo $isi;

if($backup){ echo '<script>alert("Database Berhasil Di Backup");</script>';}else{ echo '<script>alert("Database Gagal Di Backup");</script>';}
exit;
?>