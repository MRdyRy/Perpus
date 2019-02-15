<?php
include "../koneksi.php";
session_start();
include "../pengaturan/script/buka_buku.js";
$query = "select * from tb_file order by id_file desc";
$hasil = mysql_query($query);
$total = mysql_num_rows($hasil);
?>
<link href="../pengaturan/css/bootstrap.min.css" rel="stylesheet" />

<!--akhir css sma botstrap-->
</head>

<body style="background-image:url(../pengaturan/img/noisy_grid.png);background-repeat:repeat;">

<a href="index.php?pilih=kembali"><button type="button" style="float:left;margin-bottom:5px;margin-top:4px;margin-left:4px;padding:5px;" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-link"></span><strong> kembali</strong></button></a>
<div class="panel panel-default" style="margin-right:20px;margin-top:7px;">
<div class="panel-heading" style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold">
<h3 class="panel-title">
HALAMAN CARI EBOOK</h3>
</div>
	<div class="panel-body">
    <div class="pencarian" style="float:left;"><button class="btn btn-sm btn-primary" onClick="buka();"><span class="glyphicon glyphicon-search"></span> <strong>cari buku</strong></button></div>
    
<?php include "data.buku.php"; ?>
    </div>
</div>