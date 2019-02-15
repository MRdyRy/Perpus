<link rel="stylesheet" href="pengaturan/css/bootstrap.min.css" />
<?php
include "../koneksi.php";
//include "admin/inc.nama.user.php";
include "../aksi/func.halaman.php";
session_start();

$page = 1;
if (isset($_GET['page']) && !empty($_GET['page']))
    $page = (int)$_GET['page'];
 
// untuk mengetahui berapa banyak data yang akan ditampilkan
// juga untuk men-set nilai default menjadi 5 jika tidak ada
// data $_GET['perPage'] yang dikirimkan
$dataPerPage = 6;
if (isset($_GET['perPage']) && !empty($_GET['perPage']))
    $dataPerPage = (int)$_GET['perPage'];
 
// tabel yang akan diambil datanya
$table = 'tb_file';
 
// ambil data
$dataTable = getTableData($table, $page, $dataPerPage);
 
// menampilkan tombol paginasi

showPagination($table, $dataPerPage);

?>
 
<table width="600" border="0" class="table table-responsive table-hover table-striped table-bordered">
    <thead>
    <tr><td >No</td>
    <td >Nama Buku</td>
    <td >Kategori</td>
    <td >Tgl Upload</td>
    <td >Keterangan</td>
    <td >Diupload Oleh</td>
    <td colspan="3">Option</td></tr>
  </thead>
    
    <?php
    foreach ($dataTable as $i => $data)
    {
        $no = ($i + 1) + (($page - 1) * $dataPerPage);
        echo '<tr>
                <td>'.$no.'</td>
                <td>'.$data['judul_file'].'</td>
				<td>'.$data['kategori'].'</td>
				<td>'.$data['tgl_upload'].'</td>
				<td>'.$data['deskripsi'].'</td>';
				$id_user = $data['id_user'];
		$queryuser = "SELECT * FROM tb_user WHERE id_user ='$id_user'";
		$ambil = mysql_query($queryuser);
		while($tampilkanuser = mysql_fetch_array($ambil)){
		echo '<td>'.$tampilkanuser['nama'].'</td>';
		}
		?>
         <td><a href="../aksi/bacaebookn.php?id=<?php echo $data['id_file']; ?>"><button type="button" class="btn btn-primary btn-sm" title="Baca"><span class="glyphicon glyphicon-folder-open"></span></button></a></td>
    
    <td><a href="../aksi/adm_hapus_ebook.php?id=<?php echo $data['id_file'];?>"><button type="button" class="btn btn-danger btn-sm" name="id" id="id"><span class="glyphicon glyphicon-remove"></span></button></a></td>
				
		<?php		
				
        echo '</tr>';
    }
    ?>
    
</table>

