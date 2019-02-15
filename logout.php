<?php
session_start();
// apabila ditekan tombol logout, session username & level akan hilang 
unset($_SESSION['nama']);
unset($_SESSION['npm']);
unset($_SESSION['level']);
echo "<script>document.location='../perpus/index.php';</script>";
?>
