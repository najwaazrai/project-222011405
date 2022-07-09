<!DOCTYPE html> <html lang='en-GB'>
<head>
<title>Tambah Kegiatan</title>
</head>
<body>
<h3>Form Menambahkan Data Kegiatan</h3>
<?php
session_start();
echo '<form action="TambahAnggota_action.php" method="post">
<label>Nama : <input type="text" name="nama"></label></br></br>
<label>Kelas : <input type="text" name="kelas"></label></br></br>
<label>Divisi   : <input type="text" name="divisi"></label></br></br>
<label>Jabatan          : <input type="text" name="jabatan"></label></br></br>
<input type="submit" value="Tambah">
</form>
';
?>

</body>
</html>