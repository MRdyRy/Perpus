<?php
include "../koneksi.php";
 ?>
<center><br>
<p style="border-bottom:1px dashed #000">TABEL DATABASE <?PHP echo $db_name; ?> </p>
</center>
<?php
$query = "SHOW TABLES";
$hasil = mysql_query($query);

 
// menampilkan semua tabel dalam form
echo "<form style='background:#ccc' method='post' action='proses_backup.php'>";
echo "<table>";
while ($data = mysql_fetch_row($hasil))
{
	echo "<tr>";
   echo "<td><img src='../pengaturan/img/folder.gif'>  $data[0]<br>";echo "</td>";
   echo "</tr>";
}
echo "</table><br>";
echo "<div style='border-top:3px dashed #e5e5e5;'></div>";
echo "<p>Silahkan mengklik tombol berikut untuk membackup Database <strong style='text-decoration:underline;color:#CC0033'>:</strong></p>";
echo "<input type='submit' class='btn btn-primary' name='submit' value='Backup Data'>";
echo "</form>";

 
?>


