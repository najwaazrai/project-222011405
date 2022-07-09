<!DOCTYPE html> <html lang='en-GB'>
<head>
<title>Tambah Kegiatan</title>
</head>
<body>
<h3>Form Edit Data Kegiatan</h3>
<?php 
session_start();
include 'Connection.php';
$stmt = $conn->query("select nama,deskripsi,tanggal,status from kegiatan where nama='".$_REQUEST["nama"]."'");
$sel= $stmt->fetch_assoc();
$form = '<form action="EditKegiatan_action.php" method="post">
<label>Nama Kegiatan      : <input type="text" name="nama" value="'.$sel["nama"].'"></label></br>
<label>Deskripsi Kegiatan : <input type="text" name="desk" value="'.$sel["deskripsi"].'"></label></br>
<label>Tanggal Kegiatan   : <input type="date" name="tgl" value="'.$sel["tanggal"].'"></label></br>
<label>Status Kegiatan    :</label>';
$form = $form.'<select name="status">
<option value="Belum Terlaksana"';
if ($sel["status"] == "Belum Terlaksana") 
    $form=$form.'selected="selected"';
$form=$form.'>Belum Terlaksana</option>
<option value="Tepat Waktu"';
if ($sel["status"] == "Tepat Waktu") 
    $form=$form.'selected="selected"';
$form= $form.' >Tepat Waktu</option>
<option value="Tidak Terlaksana"';
if ($sel["status"] == "Tidak Terlaksana") 
    $form=$form.'selected="selected"';
$form=$form.'>Tidak Terlaksana</option>
<option value="Terlaksana Terlambat"';
if ($sel["status"] == "Terlaksana Terlambat") 
    $form=$form.'selected="selected"';
$form=$form.'>Terlaksana Terlambat</option></select><br/><input type="submit" value="Edit"></form>';
echo $form;
include 'Connection.php';
$stmt=$conn->query("delete from kegiatan where nama ='".$sel["nama"]."'");
?>
</body>
</html>