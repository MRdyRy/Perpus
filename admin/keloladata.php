<?php
include "../koneksi.php";
include "../pengaturan/script/buka_lap_user.js";
include "../pengaturan/script/buka_lap_buku.js";
session_start();
?>

<style>
.c{height:100px; width:400px;margin-right:5px;}
.v{height:100px; width:400px;margin-left:5px;}
.n{}
</style>
<br />






<div class="n">
<button class="btn btn-primary col-sm-2 c" onclick="lapbuku();"><p style="margin-top:15px;border-bottom:2px solid #fff;padding-bottom:3px;"><span class="glyphicon glyphicon-paperclip" style="float:left"></span>&nbsp;&nbsp;&nbsp;DATA BUKU</p><br />
<p style="color:#e5e5e5">Melihat Jumlah Data Buku Berdasarkan Jurusan</p></button>

<button class="btn btn-success col-sm-2 v" onclick="lapuser();"><p style="margin-top:15px;border-bottom:2px solid #fff;padding-bottom:3px;"><span class="glyphicon glyphicon-user" style="float:left"></span>&nbsp;&nbsp;&nbsp;DATA USER</p><br />
<p style="color:#e5e5e5">Melihat Jumlah Data User Berdasarkan Jurusan</p></button>

</div>