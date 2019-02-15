<?php
include "../koneksi.php";
session_start();
?>

<link rel="shortcut icon" type="image/x-icon" href="../pengaturan/icon/accessories_dictionary.png"/>
<link href="../pengaturan/css/bootstrap.min.css" rel="stylesheet" />
<link href="../pengaturan/css/stylenya.css" rel="stylesheet" />

<!--akhir css sma botstrap-->

<!--jsnya-->
<script src="../pengaturan/js/bootstrap.js"></script>
<script src="../pengaturan/js/bootstrap.min.js"></script>
<script src="../pengaturan/js/jquery.min.js"></script>
<script src="../pengaturan/js/modal.js"></script>
<script src="../pengaturan/js/dropdown.js"></script>
<script src="../pengaturan/js/collapse.js"></script>
<script src="../pengaturan/js/tooltip.js"></script>
<script src="../pengaturan/js/transition.js"></script>
<script src="../pengaturan/js/carousel.js"></script>
<script src="../pengaturan/js/bootstrap-datepicker2.js"></script>
<!--akhir blok js-->
<div class=" container-fluid panel">
<div style="background-color:#e5e5e5;margin-top:10px;">
<form class="form-inline" role="form" name="cari" method="POST" style="background-image:url(../pengaturan/img/pattern.png);background-repeat:repeat;padding:5px; margin-bottom:8px; border:2px solid #CCCCCC">
    <p><strong><h4>PENCARIAN BUKU ( <span class="glyphicon glyphicon-book"></span> )</h4></strong></p>
    <div class="form-group">
    	<label class="sr-only" for="kata">Kata Kunci</label>
        <input type="text" class="form-control" id="kata" name="kata" placeholder="Tulis sesuatu disini" autocomplete="on" required>
    </div><!--akhir kata kunci-->
    
    <div class="form-group">
        <select class="form-control col-md-5" id="kategori" name="kategori">
                    <option>Cari berdasarkan :</option>
                    <option>------------------</option>
                    <option value="judul_file">Judul Buku</option>
                    <option value="kategori">Kategori</option>
                    </select>
    </div>
    <input type="submit" class="btn btn-default" value="Cari" name="cari" id="cari">
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

      $querynya = "SELECT  *  FROM `tb_file` WHERE `$kategori` LIKE '%".mysql_real_escape_string($kata)."%'";
      $jalankan = mysql_query($querynya);

      if(mysql_num_rows($jalankan) >= 1){
        echo '<script>alert("Data Ditemukan");</script>';
		
		$no=1;
		echo '<div id="scrol">';
		echo '<table class="table table-striped table-hover" width="600" border="0">';
		  echo '<thead>';
		  echo '<tr>';
		  echo '<td>NO</td>';
		  echo '<td>JUDUL</td>';
		  echo '<td>KATEGORI</td>';
		  echo '<td>TGL UPLOAD</td>';
		  echo '<td>KETERANGAN</td>';
		  echo '<td>PENGUPLOAD</td>';
		  echo '<td colspan="3">OPSI</td>';
		  echo '</tr>';
		  echo '</thead>';
		  
        while ($query_row = mysql_fetch_assoc($jalankan)) {
          
		  
		  echo '<tr>';
		  echo '<td>'.$no++.'</td>';
		  echo '<td><img src="../pengaturan/img/pdf.gif"/> '.$query_row['judul_file'].'</td>';
		  echo '<td>'.$query_row['kategori'].'</td>';
		  echo '<td>'.$query_row['tgl_upload'].'</td>';
		  echo '<td>'.$query_row['deskripsi'].'</td>';
		  $id = $query_row['id_user'];
		  $nyari = "SELECT * FROM tb_user WHERE id_user = '$id'";
		  $ambil = mysql_query($nyari);
		  while($up = mysql_fetch_array($ambil)){
		  echo '<td>'.$up['nama'].'</td>';}
		  echo '<td><a href="../aksi/bacaebookn.php?id='.$query_row['id_file'].'"><button type="button" class="btn btn-primary btn-xs" title="baca" name="id" id="id">baca</button></a></td>';
		  echo '<td><a href="../aksi/adm_hapus_ebook.php?id='.$query_row['id_file'].'"><button type="button" class="btn btn-danger btn-xs" title="hapus" name="id" id="id">hapus</button></a></td>';
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
