<?php
include "../koneksi.php";
session_start();
$smua  = "SELECT `prodi` FROM tb_user";
$sm = mysql_query($smua);
$semua = mysql_num_rows($sm);

$inf ="SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%Informatika%'";
$itung =  mysql_query($inf);
$itunginf =mysql_num_rows($itung);

$informatika = ceil($itunginf/$semua * 100);


$sastra = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%sastra%'";;
$itsastra = mysql_query($sastra);
$itungsastra = mysql_num_rows($itsastra);
$sastra = ceil($itungsastra/$semua * 100);

$dkv = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%Dkv%'";
$itdkv = mysql_query($dkv);
$itungdkv = mysql_num_rows($itdkv);
$desain = ceil($itungdkv/$semua * 100);

$mtk = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%Matematika%'";
$itmtk = mysql_query($mtk);
$itungmtk = mysql_num_rows($itmtk);
$matematika = ceil($itungmtk/$semua * 100);

$arsitek = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%Arsitektur%'";
$itarsitek = mysql_query($arsitek);
$itungarsitek = mysql_num_rows($itarsitek);
$arsitektur = ceil($itungarsitek/$semua * 100);

$indus = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%Industri%'";
$itindus = mysql_query($indus);
$itungindus = mysql_num_rows($itindus);
$industri = ceil($itungindus/$semua * 100);

$bk = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%Konseling%'";
$itbk = mysql_query($bk);
$itungbk = mysql_num_rows($itbk);
$konseling = ceil($itungbk/$semua * 100);

$ekonom = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%Ekonomi%'";
$itekonom = mysql_query($ekonom);
$itungekonom = mysql_num_rows($itekonom);
$ekonomi = ceil($itungekonom/$semua * 100);

$ips = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%IPS%'";
$itips = mysql_query($ips);
$itungips = mysql_num_rows($itips);
$ipss = ceil($itungips/$semua * 100);


$ipa = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%IPA%'";
$itipa = mysql_query($ipa);
$itungipa = mysql_num_rows($itipa);
$ipaa = ceil($itungipa/$semua * 100);



$inggr = "SELECT `prodi` FROM `tb_user` WHERE `prodi` LIKE '%Inggris%'";
$itinggr = mysql_query($inggr);
$itunginggr = mysql_num_rows($itinggr);
$inggris = ceil($itunginggr/$semua * 100);


?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../pengaturan/css/bootstrap.min.css" />
<link rel="shortcut icon" type="x-image" href="../pengaturan/icon/accessories_dictionary.png" />
</head>

<style>
.a{ text-align:center;}td{ font-family:"Times New Roman", Times, serif;} .z{background:#e5e5e5;}h3{text-transform:uppercase;font-family: "Times New Roman", Times, serif}
			#logo{ height:40px; width:40px;}
			#kopsurat{left:0;right:0;border-bottom:2px solid #000;margin-bottom:7px;}
			#pencetak {float:left;left:10px;margin-left:140px;}
			.hal{margin-left:25px;}
			#nama{border-bottom:1px solid #000;text-transform:uppercase;}
			#pencet{float:right;margin-right:20px;}
@media print {
            body * {
                visibility:hidden;
            } 
            #print, #print * {
                visibility:visible;
            }
            #print { /* aligning the printable area */
                position:absolute;
                left:0;
                top:0;
				right:0;
            }
			#pencet{ visibility:hidden;}
			#logo{ height:40px; width:40px;}
			#kopsurat{left:0;right:0;border-bottom:2px solid #000;margin-bottom:7px;}
			#pencetak {float:left;left:10px;margin-left:140px;}
			#nama{border-bottom:1px solid #000;text-transform:uppercase;}
        }

</style>

<body>
<br />
<br />
<div id="print">
<div id="kopsurat"><center><p><img id="logo" src="../pengaturan/img/logo-unindra copy.png" />&nbsp;&nbsp;<h4>UNIVERSITAS INDRAPRASTA PGRI</h4></p></center>
<center>Perpustakaan Digital (E-Learning)</p></center>
</div>
<button id="pencet" type="submit" onclick="window.print();">Cetak</button>
<h5 class="hal">Hal : Laporan Jumlah User</h5>
<div class="container">
<table class="table table-responsive table-condensed table-bordered table-hover table-striped">
<thead>
<tr>
<td class="a">NO</td>
<td class="a">JURUSAN</td>
<td class="a">JUMLAH USER</td>
</tr>
</thead>
<tr>
<td>1</td>
<td>INFORMATIKA</td>
<td class="a"><?php echo $itunginf; ?></td>
</tr>
<tr>
<td>2</td>
<td>MATEMATIKA</td>
<td class="a"><?php echo $itungmtk; ?></td>
</tr>
<tr>
<td>3</td>
<td>ARSITEKTUR</td>
<td class="a"><?php echo $itungarsitek; ?></td>
</tr>
<tr>
<td>4</td>
<td>INDUSTRI</td>
<td class="a"><?php echo $itungindus; ?></td>
</tr>
<tr>
<td>5</td>
<td>IPA</td>
<td class="a"><?php echo $itungipa; ?></td>
</tr>
<tr>
<td>6</td>
<td>SASTRA</td>
<td class="a"><?php echo $itungsastra; ?></td>
</tr>
<tr>
<td>7</td>
<td>DESAIN KOMUNIKASI VISUAL</td>
<td class="a"><?php echo $itungdkv; ?></td>
</tr>

<tr>
<td>8</td>
<td>B.INGGRIS</td>
<td class="a"><?php echo $itunginggr; ?></td>
</tr>

<tr>
<td>9</td>
<td>IPS</td>
<td class="a"><?php echo $itungips; ?></td>
</tr>

<tr>
<td>10</td>
<td>BIMBINGAN KONSELING</td>
<td class="a"><?php echo $itungbk; ?></td>
</tr>

<tr>
<td>11</td>
<td>EKONOMI</td>
<td class="a"><?php echo $itungekonom; ?></td>
</tr>
<tr>
<td class="z" colspan="2">Jumlah :</td>
<td class="a"><?php echo $semua; ?></td>
</tr>
</table>
</div>
<br />
<br />
<div id="pencetak">
<p id="nama"><?php $u = "select * from tb_user where npm = '$_SESSION[npm]'";
					   $k = mysql_query($u);
					   while($l = mysql_fetch_array($k)){
					   echo $l['nama'];?></p>
<p>NIP/NPM : <?php echo $l['npm']; } ?></p>
</div>
</div>
</body>
</html>
