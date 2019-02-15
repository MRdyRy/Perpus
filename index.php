<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perpustakaan Digital</title>
<meta name="viewport" content="width-device-width, initial-scale=1.0" />
<!--css sama bootstrap disini-->
<link rel="shortcut icon" type="image/x-icon" href="pengaturan/icon/accessories_dictionary.png" />
<link href="pengaturan/css/bootstrap.min.css" rel="stylesheet" />
<link href="pengaturan/css/stylenya.css" rel="stylesheet" />
<link href="pengaturan/js/datepicker2.css" rel="stylesheet"/>
<link href="pengaturan/js/datepicker.css" rel="stylesheet"/>

<!--akhir css sma botstrap-->
</head>

<body>
<!--jsnya-->
<script src="pengaturan/js/bootstrap.js"></script>
<script src="pengaturan/js/bootstrap.min.js"></script>
<script src="pengaturan/js/jquery.min.js"></script>
<script src="pengaturan/js/modal.js"></script>
<script src="pengaturan/js/dropdown.js"></script>
<script src="pengaturan/js/collapse.js"></script>
<script src="pengaturan/js/tooltip.js"></script>
<script src="pengaturan/js/transition.js"></script>
<script src="pengaturan/js/popover.js"></script>
<!--akhir blok js-->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="padding:2px;">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
        <a href="#" class="navbar-brand" style="font-family:Georgia, 'Times New Roman', Times, serif;">PERPUSTAKAAN DIGITAL</a>    </div>
    <div class="collapse navbar-collapse" id="menu" style="margin-right:30px;">
    <form class=" navbar-form navbar-nav navbar-right" role="search" method="post" action="ceklogin.php" name="loginf">
				<div class="form-group">
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" autocomplete="off"/>
                <input type="text" class="form-control" name="npm" placeholder="Masukan NPM" autocomplete="off"/>
                </div>
                <button type="submit" class="btn btn-sm btn-info" name="loginf">Login</button>
            </form>
            
        </div>
        </nav>
       
 <!--disini isinya-->
 <div class=" container panel" style="margin-top:35px;">
 	<div class="container">
 	<br /><br />

<!--nyoba-->
<div class="container">
<center><img class="img-responsive img-rounded" src="pengaturan/img/logo-unindra.jpg" style="height:15%" width="15%" /></center>
<h4 class=" text-center"> PERPUSTAKAAN DIGITAL (E-LEARNING)
UNIVERSITAS INDRAPRASTA PGRI</h4>
<div style="border-bottom:1px dashed #333333;margin-right:100px;"></div>
<div class="row" style="margin-top:10px;">
<div class="col-md-4">
	<img class="img-responsive img-rounded" style="width:75%" src="pengaturan/img/2012-12-16-12-39-51.jpg">
</div>
<div class="col-md-4">    
   <img class="img-responsive img-rounded" style="width:75%;" src="pengaturan/img/Unindra.jpg" />
   </div>
<div class="col-md-4">    
   <img class="img-responsive img-rounded" style="width:70%" src="pengaturan/img/40kampus2.jpg" />
</div>
   <!--akhir gambar-->
   <div>
   <marquee align="baseline" style="margin-top:10px;margin-right:50px; font-family:'Times New Roman', Times, serif"><p><h4><strong><p><blockquote>Leaders Are Readers, "if you love read, you can learn anything you really want to know" -Zig Ziglar</blockquote></p></strong></h4></p></marquee>
   
   </div>
   <!--akhir kata2-->
   </div>
    </div>
 </div>
           

<br />

</div>


<!--akhir nyoba-->

    
    </div>
 </div>
 <!--akhir blok isi-->

<!--footer-->
<div class="navbar navbar-inverse navbar-fixed-bottom" style="margin-bottom:auto">
	<div class="container">
    <p class="navbar-text popover-options" style="font-family:Georgia, 'Times New Roman', Times, serif">PERPUSTAKAAN DIGITAL &nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"type="button" class="btn btn-link" title="<h4>Tentang pembuat :</h4>" data-container="body" data-toggle="popover" data-placement="top" data-content="
    <table>
    <tr>
    <td>Rudy Ryanto&nbsp&nbsp;&nbsp</td>
    <td>NPM&nbsp;:&nbsp;201343501567</td>
    </tr>
    <tr>
    <td>Dea Nur Asyfa&nbsp;&nbsp&nbsp</td>
    <td>NPM&nbsp;:&nbsp;201343501567</td>
    </tr>
    <tr>
    <td>Moh.Rizky&nbsp;&nbsp&nbsp</td>
    <td>NPM&nbsp;:&nbsp;201343501567</td>
    </tr>
    <tr>
    <td>Githa Septiani&nbsp;&nbsp&nbsp</td>
    <td>NPM&nbsp;:&nbsp;201343501567</td>
    </tr>
    <tr>
    <td>Yusuf Tri M.&nbsp;&nbsp&nbsp</td>
    <td>NPM&nbsp;:&nbsp;201343501567</td>
    </tr>
    </table>
    ">Tentang</a></p>
    </div>
  </div>
   <script> 
    		//options method for call datepicker
			$('#datepicker').datepicker({
         	format: 'dd-mm-yyyy',
		 	autoclose: true,
		 	todayHighlight: true
			})
    		</script>
  
  <script>
  $(function (){$(".popover-options a").popover({html:true});});
</script>
</body>
</html>