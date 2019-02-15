<?php 
include "../koneksi.php";
session_start();

$smua  = "SELECT `kategori` FROM tb_file";
$sm = mysql_query($smua);
$semua = mysql_num_rows($sm);

$inf ="SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%Informatika%'";
$itung =  mysql_query($inf);
$itunginf =mysql_num_rows($itung);

$informatika = ceil($itunginf/$semua * 100);


$sastra = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%sastra%'";;
$itsastra = mysql_query($sastra);
$itungsastra = mysql_num_rows($itsastra);
$sastra = ceil($itungsastra/$semua * 100);

$dkv = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%Dkv%'";
$itdkv = mysql_query($dkv);
$itungdkv = mysql_num_rows($itdkv);
$desain = ceil($itungdkv/$semua * 100);

$mtk = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%Matematika%'";
$itmtk = mysql_query($mtk);
$itungmtk = mysql_num_rows($itmtk);
$matematika = ceil($itungmtk/$semua * 100);

$arsitek = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%Arsitektur%'";
$itarsitek = mysql_query($arsitek);
$itungarsitek = mysql_num_rows($itarsitek);
$arsitektur = ceil($itungarsitek/$semua * 100);

$indus = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%Industri%'";
$itindus = mysql_query($indus);
$itungindus = mysql_num_rows($itindus);
$industri = ceil($itungindus/$semua * 100);

$bk = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%Konseling%'";
$itbk = mysql_query($bk);
$itungbk = mysql_num_rows($itbk);
$konseling = ceil($itungbk/$semua * 100);

$ekonom = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%Ekonomi%'";
$itekonom = mysql_query($ekonom);
$itungekonom = mysql_num_rows($itekonom);
$ekonomi = ceil($itungekonom/$semua * 100);

$ips = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%IPS%'";
$itips = mysql_query($ips);
$itungips = mysql_num_rows($itips);
$ipss = ceil($itungips/$semua * 100);


$ipa = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%IPA%'";
$itipa = mysql_query($ipa);
$itungipa = mysql_num_rows($itipa);
$ipaa = ceil($itungipa/$semua * 100);



$inggr = "SELECT `kategori` FROM `tb_file` WHERE `kategori` LIKE '%Inggris%'";
$itinggr = mysql_query($inggr);
$itunginggr = mysql_num_rows($itinggr);
$inggris = ceil($itunginggr/$semua * 100);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../pengaturan/css/bootstrap.min.css" />
<title>Diagram Laporan Buku</title>
</head>

<body>

<?php
echo "<table height='".$informatika."%' width='20px' bgcolor='#000'></table>";
?>

</body>
</html>
