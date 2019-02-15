<?php
include "../koneksi.php";
$query = "select * from tb_file";
$hasil = mysql_query($query);
$total = mysql_num_rows($hasil);
?>
<link href="../pengaturan/css/bootstrap.min.css" rel="stylesheet" />
<!--script php buat bikin halaman-->
<?php
include "../paginate.php";
$per_page = 5;         // number of results to show per page
$result = mysql_query("SELECT * FROM tb_file");
$total_results = mysql_num_rows($result);
$total_pages = ceil($total_results / $per_page);//total pages we going to have

//-------------if page is setcheck------------------//
if (isset($_GET['page'])) {
    $show_page = $_GET['page'];             //it will telles the current page
    if ($show_page > 0 && $show_page <= $total_pages) {
        $start = ($show_page - 1) * $per_page;
        $end = $start + $per_page;
    } else {
        // error - show first set of results
        $start = 0;              
        $end = $per_page;
    }
} else {
    // if page isn't set, show first set of results
    $start = 0;
    $end = $per_page;
}
// display pagination
$page = intval($_GET['page']);

$tpages=$total_pages;
if ($page <= 0)
    $page = 1;
?>

<!--akhir blok script halaman-->





<!--akhir css sma botstrap-->
</head>

<body style="background-image:url(../pengaturan/img/noisy_grid.png);background-repeat:repeat;">
<!--jsnya-->
<script src="../pengaturan/js/bootstrap.js"></script>
<script src="../pengaturan/js/bootstrap.min.js"></script>
<script src="../pengaturan/js/jquery.min.js"></script>
<script src="../pengaturan/js/collapse.js"></script>
<script src="../pengaturan/js/transition.js"></script>
<script src="../pengaturan/js/modal.js"></script>
<!--akhir blok js-->
<a href="index.php?pilih=kembali"><button type="button" style="float:left;margin-bottom:5px;margin-top:4px;margin-left:4px;padding:5px;" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-link"></span><strong> kembali</strong></button></a>
<div class="panel panel-default" style="margin-right:20px;margin-top:7px;">
<div class="panel-heading" style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold">
<h3 class="panel-title">
HALAMAN CARI EBOOK</h3>
</div>
	<div class="panel-body">
    
    <form class="form-inline" role="form" name="cari" method="post" style="background-image:url(../pengaturan/img/pattern.png);background-repeat:repeat;padding:5px; margin-bottom:8px; border:2px solid #CCCCCC">
    <p><strong><h4>PENCARIAN :</h4></strong></p>
    <div class="form-group">
    	<label class="sr-only" for="kata">Kata Kunci</label>
        <input type="text" class="form-control" id="kata" name="kata" placeholder="Tulis sesuatu disini" autocomplete="on" required>
    </div><!--akhir kata kunci-->
    
    <div class="form-group">
        <select class="form-control col-md-5" id="berdasarkan" name="berdasarkan">
                    <option>Cari berdasarkan :</option>
                    <option>------------------</option>
                    <option>Nama Buku</option>
                    <option>Kategori</option>
                    <option>Size</option>
                    <option>Sembarang</option></select>
    </div>
    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"> Cari</span></button>
    </form>


<?php
                $show_page=0;
                    $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                    echo '<div class="pagination"><ul>';
                    if ($total_pages > 1) {
                        echo paginate($reload, $show_page, $total_pages);
                    }
                    echo "</ul></div>";
                    // display data in table
                    echo "<table class='table table-responsive table-hover table-bordered table-striped text-center'>";
                    echo "<thead><tr><td>Nama Buku</td><td>Kategori</td><td>Tgl Upload</td><td>Keterangan</td><td>Diupload Oleh</td><td colspan='2'>Option</td></tr></thead>";
                    // loop through results of database query, displaying them in the table 
                    for ($i = $start; $i < $end; $i++) {
                        // make sure that PHP doesn't try to show results that don't exist
                        if ($i == $total_results) {
                            break;
                        }
                 

// echo out the contents of each row into a table
                        echo "<tr>";
                        echo '<td>' . mysql_result($result, $i, 'judul_file') . '</td>';
                        echo '<td>' . mysql_result($result, $i, 'kategori') . '</td>';
                        echo '<td>' . mysql_result($result, $i, 'tgl_upload') . '</td>';
                        echo '<td>' . mysql_result($result, $i, 'deskripsi') . '</td>';


            $id = mysql_result($result, $i, 'id_user');
            $cari = "select * from tb_user where id_user = '$id'";
            $query = mysql_query($cari);
            while($isinya = mysql_fetch_array($query)){



                        echo '<td>'.$isinya['nama'].'</td>';
                        echo '<td><button type="button" class="btn btn-primary btn-sm" title="Baca"><span class="glyphicon glyphicon-open"></span></button></a></td>';
                        echo '<td><button type="button" class="btn btn-success btn-sm" title="Unduh"><span class="glyphicon glyphicon-download"></span></button></a></td>';
                        echo "</tr>";
                    }  }     
                    // close table>
                echo "</table>";
            // pagination
            ?>
 
    </div>
</div>