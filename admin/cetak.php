<script language="javascript">
function cetak(){
window.opener.document.getElementById("id_user").value = document.getElementById("id_user").value;
}
</script>

<?php 
include "../koneksi.php";
session_start();
$id = isset($_GET['id']) ? $_GET['id'] : "";
$a = "select * from tb_user where id_user = '$id'";
$q = mysql_query($a);
while($data = mysql_fetch_array($q)){
?>
<link rel="shortcut icon" type="x-image" href="../pengaturan/icon/accessories_dictionary.png" />
<link rel="stylesheet" href="../pengaturan/css/bootstrap.min.css" />
<style>
.garis_luar{border:2px solid #000000;background:#fff; height:55mm; width:90mm; border-radius:10px;margin-top:10mm;margin-left:30px;}
.daleman{background:url(../pengaturan/img/noisy_grid.png);border-bottom:1px solid #000000; border-top-left-radius:10px;border-top-right-radius:12px;height:10mm;height:12mm; font-size:12px}
.logo{height:6mm; width:5mm;margin-left:15px;padding-top:5px;margin-top:auto;}
.judul{text-transform:uppercase; font-family:Georgia, "Times New Roman", Times, serif; font-size:8px;}
.d{margin-top:-20px;margin-left:10px;font-size:x-small}
.tombol{margin-top:100px;}
.foton{position:absolute;margin-left:270px;margin-top:-20px;}



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
			.tombol{ visibility:hidden;}
			
        }


</style>
<title>Laman Cetak Kartu Anggota</title>
<div id="print">
<div class="garis_luar">
	<div class="daleman">
    <center><img class="img-responsive logo" src="../pengaturan/img/logo-unindra copy.png" /><p class="judul">kartu e-learning universitas indraprasta pgri<br />
(unindra)</p></center><br />
	
    <table style="position:relative" width="100%" class="d">
    <tr height="40px;">
    <td>Nama</td>
    <td>:&nbsp;<?php echo $data['nama']; ?></td> 
    <div class="foton"><center>      <img class="r img-responsive img-rounded img-thumbnail" style="width:12mm; height:15mm; float:right;margin-right:10px;" src="<?php $query3 = "SELECT * FROM tb_foto WHERE id_user = '$id'";
	$ambilfoto = mysql_query($query3);
	while($isinya = mysql_fetch_array($ambilfoto)){
	$lokasi_foto ="../foto/".$isinya['foto']; echo $lokasi_foto; } ?>"  alt="kosong"/>
    </center></div>
    </tr>
    <tr height="30xp;">
    <td>TTL</td><td>:&nbsp;<?php echo $data['tempat'].', '.$data['tgl'];?></td></tr>
    <tr height="30px;">
    <td>NPM</td><td>:&nbsp;<?php echo $data['npm']; ?></td></tr>
    <tr height="30px;">
    <td>PRODI</td><td>:&nbsp;<?php echo $data['prodi']; ?></td>
    </tr></table>
</div>
</div>
</div>
    <div class="tombol">
    <button class="btn btn-primary" onclick="window.print();" style="padding:5px;margin-left:10px;">Cetak Kartu</button>
    </div>
	

<?php
}
?>


<?php
if(isset($_POST['kembali'])){
header("location:perpus/admin/?hal=kelolauser");
} ?>