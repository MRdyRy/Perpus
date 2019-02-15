<?php 
include "../koneksi.php";
session_start();
include "../pengaturan/script/buka_cetakkartu.js";
?>
<link href="../pengaturan/css/bootstrap.min.css" rel="stylesheet" />


<div class="row">
<div class="container">
	<div class="col-sm-2">
    <div class=" panel panel-default" style="padding:2px;">
    <div class="panel-heading">
    <p class="panel-title"><h3>MENU</h3></p>
    </div>

    <div class="panel-body">
    <a href="?hal=kelolauser"><button id="rr" type="button" class="well btn btn-default col-sm-12"><span id="logo" class="glyphicon glyphicon-user"> Kelola User</span></button></a>
    <a href="?hal=kelolabuku"><button id="rr" type="button" class="well btn btn-default col-sm-12"><span id="logo" class="glyphicon glyphicon-book"> Kelola Buku</span></button></a>
    <a href="?hal=keloladata"><button id="rr" type="button" class="well btn btn-default col-sm-12"><span id="logo1" class="glyphicon glyphicon-book"> Kelola Data</span></button></a>
    <a href="?hal=backupdatabase"><button id="rr" type="button" class="well btn btn-default col-sm-12"><span id="logo" class="glyphicon glyphicon-upload"> Backup DB</span></button></a>
    
    </div>
	<style>
    #rr{padding:7px;margin-bottom:5px;}#logo{padding:5px;}#logo1{padding:3px;}
	li{ list-style:none; display:inline;}#mg{height:40px;width:40px; }img:hover{ background-color:#999999}</style>
    </div>
    </div><!--akhir col sm 2-->

    <div class="col-sm-9" style="padding:0px;">
    <div class="panel panel-default">
    	<div class="panel-heading">
        <ul>


<li><a href="?hal=profil"><img src="../pengaturan/icon/user.png" name="mg" class="img-responsive img-rounded img-thumbnail" id="mg" title="profil <?php echo $_SESSION['nama']; ?>"></a></li>
<li><a href="#" onclick="cetak();"><img src="../pengaturan/icon/contacts.png" name="mg" class="img-responsive img-rounded img-thumbnail" id="mg" title="cetak kartu anggota"></a></li>
<li><a href="?hal=inputbuku"><img src="../pengaturan/icon/document_new.png" name="mg" class="img-responsive img-rounded img-thumbnail" id="mg" title="Upload PDF"></a></li>
<li><a href="?hal=keloladata"><img class="img-responsive img-thumbnail" src="../pengaturan/icon/evolution_tasks.png" id="mg" title="Laporan Data"></a></li>

        </ul>
        </div><!--pala panel-->
    </div><!--akhir panel default-->
    <div style="padding-bottom:19px;">
    	<div class="panel-body well">
         <?php 
			$hal = isset($_GET['hal']) ? $_GET['hal'] : "";
			
			if(strstr($hal,"kelolauser")) {
			$j="Menu Kelola User";
			} else if(strstr($hal,"kelolabuku")) {
			$j="Menu Kelola Buku";
			} else if(strstr($hal,"backupdatabase")) {
			$j="Menu Backup Database";
			} else if(strstr($hal,"profil")) {
			$j="";
			} else if(strstr($hal,"keloladata")){
			$j="Menu Kelola Data";
			} else if(strstr($hal,"inputbuku")) {
			$j="<strong>Menu Input Buku</strong>";
			} else {
			$j="Selamat Datang ".$_SESSION['nama'];
			} 
			echo $j;
		?>
			</h3>
			<div class="tengah">
		<?php 
	//menu hal
	if($hal=="kelolauser") {
	include "$hal.php";
	} else if($hal=="kelolabuku") {
	include "$hal.php";
	} else if($hal=="backupdatabase") {
	include "$hal.php";
	} else if($hal=="cetakkartu") {
	include "$hal.php";
	} else if($hal=="keloladata") {
	include "$hal.php";
	} else if($hal=="profil") {
	include "$hal.php";
	} else if($hal=="inputbuku"){
	include "$hal.php";
	} else if($hal=="cetak"){
	include "$hal.php";
	}
	?>
        </div>
    </div><!--akhir panel defa isi-->
    </div>
</div>

</div>