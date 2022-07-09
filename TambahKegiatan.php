<!DOCTYPE html> <html lang='en-GB'>
<head>
<title>Tambah Kegiatan</title>
</head>
<body>
<h3>Form Menambahkan Data Kegiatan</h3>
<?php
session_start();
echo '<form action="TambahKegiatan_action.php" method="post">
<label>Nama Kegiatan      : <input type="text" name="nama"></label></br></br>
<label>Deskripsi Kegiatan : <input type="text" name="desk"></label></br></br>
<label>Tanggal Kegiatan   : <input type="date" name="tgl"></label></br></br>
<label>Status Kegiatan    :</label>
<select name="status">
    <option value="Belum Terlaksana">Belum Terlaksana</option>
    <option value="Tepat Waktu">Tepat Waktu</option>
    <option value="Tidak Terlaksana">Tidak Terlaksana</option>
    <option value="Terlaksana Terlambat">Terlaksanan Terlambat</option>
  </select></br>
<input type="submit" value="Tambah">
</form>
';
?>

</body>
</html>