<?php
session_start();
include "../koneksi.php";
require_once "../validasi/validasi_admin.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perpustakaan Digital</title>
<meta name="viewport" content="width-device-width, initial-scale=1.0" />
<!--css sama bootstrap disini-->
<link rel="shortcut icon" type="image/x-icon" href="../pengaturan/icon/accessories_dictionary.png" />
<link href="../pengaturan/css/bootstrap.min.css" rel="stylesheet" />
<link href="../pengaturan/css/stylenya.css" rel="stylesheet" />

<!--akhir css sma botstrap-->
</head>

<body>
<!--jsnya-->
<script src="../pengaturan/js/bootstrap.js"></script>
<script src="../pengaturan/js/bootstrap.min.js"></script>
<script src="../pengaturan/js/jquery.min.js"></script>
<script src="../pengaturan/js/modal.js"></script>
<script src="../pengaturan/js/dropdown.js"></script>
<script src="../pengaturan/js/transition.js"></script>
<script src="../pengaturan/js/bootstrap-datepicker2.js"></script>
<!--akhir blok js-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>    </button>
        <a href="#" class="navbar-brand" style="font-family:Georgia, 'Times New Roman', Times, serif;">PERPUSTAKAAN DIGITAL</a>    </div>
    <div class="collapse navbar-collapse" id="menu" style="margin-right:30px;">
    <div class=" navbar-form navbar-nav navbar-right" role="search" method="post" action="ceklogin.php" name="loginf" id="loginf">
                <a href="../logout.php"><button type="button" class="btn btn-sm btn-warning">Logout</button></a>
            </div>
        </div>
        </nav>
        
<!--arah isi-->
<div class="container panel" style="margin-top:43px;">
	<div>
    <center>
    <?php include "arah.php"; ?>
   
    </center>
    </div>
</div>
<!--akhir isi-->


<!--footer-->
<div class="navbar navbar-inverse navbar-fixed-bottom">
	<div class="container">
    <p class="navbar-text" style="font-family:Georgia, 'Times New Roman', Times, serif">PERPUSTAKAAN DIGITAL &copy; 2014</p>
    </div>
  </div>
</body>
</html>
