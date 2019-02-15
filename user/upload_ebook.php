<link href="../pengaturan/css/bootstrap.min.css" rel="stylesheet" />

<!--akhir css sma botstrap-->
</head>

<body style="background-image:url(../pengaturan/img/pattern.png);background-repeat:repeat;">
<!--jsnya-->

<!--akhir blok js-->
<!--arah isi-->
<a href="index.php?pilih=kembali"><button type="button" style="float:left;margin-bottom:5px;margin-top:4px;margin-left:4px;padding:5px;" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-link"></span><strong> kembali</strong></button></a>
<div class="panel panel-default" style="margin-right:20px;">
<div class="panel-heading" style="font-family:Georgia, 'Times New Roman', Times, serif; font-weight:bold">
<h3 class="panel-title">
HALAMAN UPLOAD EBOOK</h3>
</div>
		<div class="panel-body">
		<div class="row">
        <div class="col-sm-8" style="border-right:3px dotted #666666">
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
        
        <button type="submit" class="btn btn-primary" name="upload"><strong>Upload</strong></button>
        </form>
        </div>
  <div class=" col-sm-3">
  	<div>
    <p class="text-capitalize text-center"><strong id="perhatian"><h3>PERHATIAN!</h3></strong></p>
    <div style="border:1px solid #666666;margin-left:15px;"></div>
    <ul class=" text-left">
    <li>Dilarang mengupload ebook yang mengandung <strong id="pp">SARA</strong></li>
    <li>Dilarang mengupload ebook yang mengandung <strong id="pp">PORNOGRAFI</strong></li>
    <li>Jika ada ebook memiliki kategori diatas, maka <strong id="peringatan">User yang mengupload</strong> akan dikenakan sanksi</li>
    <li>Ebook yang mengandung kategori diatas,akan <strong id="pp">dihapus</strong></li>
    <style>
    li{margin-bottom:5px; border-bottom:1px dotted #999999}
    #pp{ font-style:italic;color:#FF0000}
	#peringatan{ font-style:italic;color:#FF0000}
    </style>
    </ul>
  	</div>
  </div>
</div>
</div>
</div>
<!--akhir isi-->
