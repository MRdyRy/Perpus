<?php
include "../koneksi.php";
include "../pengaturan/script/buka_buku.js";
$query = "select * from tb_file order by id_file desc";
$hasil = mysql_query($query);
$total = mysql_num_rows($hasil);
?>



    <button style="margin-bottom:5px;float:left" type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#input">+<span class="glyphicon glyphicon-book"></span>&nbsp; Input Buku</button><button onclick="buka();" style="margin-bottom:5px;float:left;margin-left:3px;" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span>&nbsp; Cari Buku</button><br />

<?php include "data.php"; ?>

<div id="aggaris">
 <strong class="asdfg">  Total :  <?php echo $total; ?> ebook</strong></p>
</div>
    
   <style>
   #aggaris{border:1px dashed #ccc;background:#FFFFFF;padding:2px;}.asdfg{float:right;font-family:Georgia, 'Times New Roman', Times, serif;padding-left:10px;margin-top:-5px;}
   </style>
   
   
   
   
     <!--modal input buku-->

 <div id="input" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="inputlLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header" id="uzz">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="inputLabel"><h3><p class="text-center text-info text-capitalize">Halaman input Buku <span class="glyphicon glyphicon-book"> </span></p></h3></h4>
        </div>
        <div class="modal-body" id="auah">
<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="../proses_upload_ebook.php">
        <div class="form-group">
        <label class="col-sm-2 control-label" for="judul">
        Judul Ebook
        </label>
        <div class="col-sm-8">
        <input type="text" class="form-control has-success" id="judul" name="judul" required="required" placeholder="Masukan Judul ebook">
        </div>
        </div><!--akhir judul-->
        
        <div class="form-group">
        <label class="col-sm-2 control-label" for="isifile">
        Pilih Ebook
        </label>
        <div class="col-sm-8">
        <input type="file" id="file" name="file" required />
        <p class="help-block">Ukuran Ebook Maksimal 25Mb</p>
        </div>
        </div><!--akhir isi file-->
        
        <div class="form-group">
                	<label for="Fakultas" class="col-sm-2 control-label">Kategori </label>
                    <div class="col-sm-8">
                    <select class="form-control" id="kategori" name="kategori" required="required">
                    <option>-----Pilih-----</option>
                    <optgroup label="FTMIPA">
                    <option value="Informatika">Informatika</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="Industri">Industri</option>
                    <option value="Matematika">Matematika</option>
                    </optgroup>
                    <optgroup label="FIPPS">
                    <option value="Konseling">Konseling</option>
                    <option value="Ekonomi">Ekonomi</option>
                    <option value="IPS">IPS</option>
                    </optgroup>
                    <optgroup label="FBS">
                    <option value="Sastra">Sastra</option>
                    <option value="Inggris">Inggris</option>
                    <option value="DKV">DKV</option>
                    </optgroup>
                    </select>
                    </div>
                    </div><!--akhir kategori-->
        
        <div class="form-group">
        <label class="col-sm-2 control-label" for="judul">
        Deskripsi
        </label>
        <div class="col-sm-8">
        <textarea class="form-control" rows="3" placeholder="deskripsikan ebook agar mudah dikenali" name="deskripsi"></textarea>
        </div>
        </div><!--akhir deskripsi-->
        
        <button type="submit" class="btn btn-primary" name="upload"><strong>Input</strong></button>
        </form>
        </div>
        </div>
		</div>
      </div>
    </div>
    
 <!--akhir modal input buku-->