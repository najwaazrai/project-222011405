<?php
$dbh = new PDO("mysql:host=remotemysql.com;
dbname=RgUBicYuZf",
"RgUBicYuZf",
"g7l79FtdKl");
$nama=$_GET['nama'];
$stat=$dbh->prepare("select * from dokumen where nama=?");
$stat->bindParam(1,$nama);
$stat->execute();
$row=$stat->fetch();
header('Content-type:'.$row['mime']);
echo $row['dokumen'];
?>