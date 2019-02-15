<?php
error_reporting(0);
include "../koneksi.php";
session_start();

?>
<link rel="shortcut icon" type="image/x-icon" href="../pengaturan/icon/accessories_dictionary.png"/>
<link href="../pengaturan/css/bootstrap.min.css" rel="stylesheet" />
<link href="../pengaturan/css/stylenya.css" rel="stylesheet" />

<!--akhir css sma botstrap-->

<!--jsnya-->

<script src="../pengaturan/js/bootstrap.min.js"></script>
<script src="../pengaturan/js/jquery.min.js"></script>
<script src="../pengaturan/js/dropdown.js"></script>
<script src="../pengaturan/js/tooltip.js"></script>
<script src="../pengaturan/js/transition.js"></script>

<!--akhir blok js--><div class="container-fluid panel">
<div style="background-color:#e5e5e5">
<form class="form-inline" role="form" name="cari" method="POST" style="background-image:url(../pengaturan/img/pattern.png);background-repeat:repeat;padding:5px; margin-bottom:8px; border:2px solid #CCCCCC">
    <p><strong><h4>PENCARIAN USER <span class="glyphicon glyphicon-user"></span></h4></strong></p>
    <div class="form-group">
    	<label class="sr-only" for="kata">Kata Kunci</label>
        <input type="text" class="form-control" id="kata" name="kata" placeholder="Tulis sesuatu disini" autocomplete="on" required>
    </div><!--akhir kata kunci-->
    
    <div class="form-group">
        <select class="form-control col-md-5" id="kategori" name="kategori">
                    <option>Cari berdasarkan :</option>
                    <option>------------------</option>
                    <option value="nama">Nama User</option>
                    <option value="npm">NPM</option>
                    <option value="prodi">Prodi</option>
                    <option value="tgl">Tgl Lahir</option></select>
    </div>
    <input type="submit" class="btn btn-default" value="Cari" name="cari">
    </form>
    </div>
    
    <style>
    thead{background:#336699;color:#FFFFFF;font-weight:bold; text-align:center}
    #scrol{height:550px;overflow-y:scroll;overflow-style:marquee-line;}
    </style>

<!--script php buat nampilin pencarian-->
<?php
require "../koneksi.php";
if(isset($_POST['cari'])) {
  $kategori = $_POST['kategori'];
  $kata = $_POST['kata'];
  if(!empty($kata) && !empty($kategori)) {

      $querynya = "SELECT  *  FROM `tb_user` WHERE `$kategori` LIKE '%".mysql_real_escape_string($kata)."%' order by level asc";
      $jalankan = mysql_query($querynya);

      if(mysql_num_rows($jalankan) >= 1){
        echo '<script>alert("Data Ditemukan");</script>';
		
		$no=1;
		echo '<div id="scrol">';
		echo '<table class="table table-striped table-hover " width="600" border="0">';
		  echo '<thead>';
		  echo '<tr>';
		  echo '<td>NO</td>';
		  echo '<td>NAMA</td>';
		  echo '<td>NPM</td>';
		  echo '<td>TTL</td>';
		  echo '<td>PRODI</td>';
		  echo '<td>STATUS</td>';
		  echo '<td colspan="2">OPSI</td>';
		  echo '</tr>';
		  echo '</thead>';
		  
        while ($query_row = mysql_fetch_assoc($jalankan)) {
          
		  
		  echo '<tr>';
		  echo '<td>'.$no++.'</td>';
		  
		  $level = $query_row['level'];
		  if($level ==1){
		  $status = "admin";
		  $logo = '<span class="glyphicon glyphicon-link"></span>';
		  }else{
		  $status = "user";
		  $logo = '<span class="glyphicon glyphicon-user"></span>';}
		  
		  
		  echo '<td>'.$logo.' '.$query_row['nama'].'</td>';
		  echo '<td>'.$query_row['npm'].'</td>';
		  echo '<td>'.$query_row['tempat'].', '.$query_row['tgl'].'</td>';
		  echo '<td>'.$query_row['prodi'].'</td>';
		  
		  echo '<td>'.$status.'</td>';
		  echo '<td><a href="../aksi/adm_hapus_user.php?id='.$query_row['id_user'].'"><button type="button" class="btn btn-danger btn-xs" title="hapus" name="id" id="id">hapus</button></a></td>';
		  echo '<td><a href="cetak.php?id='.$query_row['id_user'].'"><button type="button" class="btn btn-success btn-xs" title="hapus" name="id" id="id">cetak kartu</button></a></td>';
		  echo '</tr>';
		  
          
		  }
		  echo '</table>';
        echo '</div>';

      }else{
        echo '<script>alert("Data Tidak Ditemukan, Silahkan diulangi");</script>';
	  }
  }
}

?>
<!--akhir script nampilin pencarian-->    




</div>