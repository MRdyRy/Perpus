<?php
include "../koneksi.php";
$query = "select * from tb_user order by level";
$hasil = mysql_query($query);
$total = mysql_num_rows($hasil);
?>

<!-- ngetes ajax nya-->
<script>
function ambidata(id){
	ajax = buatajax();
	var url="ambildata.php";
	url=url+"?q="+id;
	url=url+"&sid="+Math.random();
	ajax.onreadystatechange=stateChanged;
	ajax.open("GET",url,true);
	ajax.send(null);
	}
function buatajax(){
if(window.XMLHttpRequest){
	return new XMLHttpRequest();
	}
if(window.ActiveXObject){
	return new ActiveXObject("Microsoft.XMLHTTP");
	}
	return null;
}
function stateChanged(){
var data;
	if(ajax.readyState==11){
	data=ajax.responseText;
	if(data.length>0){
	document.getElementById(nama).value = data;
	document.getElementById(npm).value = data;
	document.getElementById(jenis_kelamin).value = data;
	document.getElementById(tempat).value = data;
	document.getElementById(tgl).value = data;
	document.getElementById(fakultas).value = data;
	document.getElementById(foto).value = data;
	}else{
	document.getElementById(nama).value = "";
	document.getElementById(npm).value = "";
	document.getElementById(jenis_kelamin).value = "";
	document.getElementById(tempat).value = "";
	document.getElementById(tgl).value = "";
	document.getElementById(fakultas).value = "";
	document.getElementById(foto).value = "";
		}
	}
}
</script>
<!-- akhir ajax nya-->

<form class="form-inline" role="form" name="cari" method="get" style="background-image:url(../pengaturan/img/pattern.png);background-repeat:repeat;padding:5px; margin-bottom:8px; border:2px solid #CCCCCC">
    <p><strong><h4>PENCARIAN :</h4></strong></p>
    <div class="form-group">
    	<label class="sr-only" for="kata">Kata Kunci</label>
        <input type="text" class="form-control" id="kata" name="kata" placeholder="Tulis sesuatu disini" autocomplete="on" required>
    </div><!--akhir kata kunci-->
    
    <div class="form-group">
        <select class="form-control col-md-5" id="berdasarkan" name="berdasarkan">
                    <option>Cari berdasarkan :</option>
                    <option>------------------</option>
                    <option value="nama">Nama User</option>
                    <option value="prodi">Prodi</option>
                    <option value="tgl">Tgl Lahir</option></select>
    </div>
    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"> Cari</span></button>
    </form>
    <table width="600" border="0" class=" table table-responsive table-hover table-bordered table-striped text-center">
  <thead>
    <tr><td >No</td>
    <td >Nama</td>
    <td >NPM / Pass</td>
    <td >TTL</td>
    <td >Prodi</td>
    <td >Status</td>
    <td colspan="2">Option</td>
  </thead>
  <tr>
    <td></td>
    <td id="nama"></td>
    <td id="npm"></td>
    <td id="tgl"></td>
    <td id="prodi"></td>
    <td id="jenis_kelamin"></td>
    <td><a href="admin?id=<?php echo $data['id_user']; ?>"><button type="button" class="btn btn-primary btn-xs" title="edit">edit</button></a></td>
    <td><a href="admin?id=<?php echo $data['id_user']; ?>"><button type="button" class="btn btn-danger btn-xs" title="hapus">hapus</button></a></td>
  </tr>
</table>
    </div>