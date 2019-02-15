<?php
include "../koneksi.php";
$query = "select * from tb_user order by level";
$hasil = mysql_query($query);
$total = mysql_num_rows($hasil);
?>
<link rel="stylesheet" href="../pengaturan/css/bootstrap.min.css" />
<link rel="shortcut icon" type="x-image" href="../pengaturan/icon/accessories_dictionary.png" />
<title>Laman Cetak Kartu Anggota</title>
<div style="margin-top:70px;margin-left:15px;margin-right:15px;">    
    <?php include "data.user.cetak.php"; ?>
    </div>