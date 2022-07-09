<?php
session_start();
include 'Connection.php';

$stmt = $conn->prepare("INSERT INTO kegiatan (nama,deskripsi,tanggal,status) VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss",$nama, $deskripsi, $tanggal, $stat);
$nama = $_POST['nama'];
$deskripsi = $_POST['desk'];
$tanggal = $_POST['tgl'];
$stat = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
echo "<script type='text/javascript'>alert('New records created successfully');</script>";
$stmt->execute();
header("Location:Kegiatan.php");

?>