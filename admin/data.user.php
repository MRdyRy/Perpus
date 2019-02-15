<link rel="stylesheet" href="../aksi/pengaturan/css/bootstrap.min.css" />
<?php
include "../koneksi.php";
//include "admin/inc.nama.user.php";
include "../aksi/func.halaman.user.php";
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
$table = 'tb_user';
 
// ambil data
$dataTable = getTableData($table, $page, $dataPerPage);
 
// menampilkan tombol paginasi
echo '<div style="float:right;">';
showPagination($table, $dataPerPage);
echo '</div>';
?>
 
<table width="600" border="0" class="table table-responsive table-hover table-striped table-bordered">
    <thead>
    <tr><td >No</td>
    <td >Nama</td>
    <td >NPM / Pass</td>
    <td >TTL</td>
    <td >Prodi</td>
    <td >Status</td>
    <td colspan="2">Option</td>
  </thead>
    
    <?php
    foreach ($dataTable as $i => $data)
    {
        $no = ($i + 1) + (($page - 1) * $dataPerPage);
        echo '<tr>';
		
		  echo '<td>'.$no.'</td>
                <td>'.$data['nama'].'</td>
				<td>'.$data['npm'].'</td>
				<td>'.$data['tempat'].','.$data['tgl'].'</td> 
				<td>'.$data['prodi'].'</td>';
				if($data['level']==1){$status="admin*";}else{$status="user";}
		  echo '<td>'.$status.'</td>';
		
		?>
         <td><a href="cetak.php?id=<?php echo $data['id_user']; ?>"><button type="button" class="btn btn-primary btn-sm" title="Cetak Kartu"><span class="glyphicon glyphicon-credit-card"></span></button></a></td>
    <?php if($data['npm']== $_SESSION['npm']){ ?>
    <td><button class="btn btn-sm btn-default" title="tidak dapat dihapus "><span class="glyphicon glyphicon-lock"></span></span></td>
    <?php }else{ ?>
    <td><a href="../aksi/adm_hapus_user.php?id=<?php echo $data['id_user'];?>"><button type="button" class="btn btn-danger btn-sm" title="Hapus" name="id" id="id"><span class="glyphicon glyphicon-remove"></span></button></a></td>
				
		<?php		
		}		
        echo '</tr>';
    }
    ?>
    
</table>

<?php
 
// menampilkan tombol paginasi
