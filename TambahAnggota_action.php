<?php
session_start();
include 'Connection.php';

$stmt = $conn->prepare("INSERT INTO anggota (nama,kelas,divisi,jabatan) VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss",$nama, $kelas, $divisi, $jabatan);
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$divisi = $_POST['divisi'];
$jabatan = $_POST['jabatan'];
$stat = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
echo "<script type='text/javascript'>alert('New records created successfully');</script>";
$stmt->execute();
header("Location:Anggota.php");

?>