<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script scr="main.js"></script>
</head>

<body>
    <div>
    <?php
    session_start();
    if (!isset($_SESSION['username'])){
    header("Location: phpLogin.php");}
    include 'Connection.php';
    ?>
    </div>
    
    <div class="sticky">
        <div class="Logo">
            <img id="logo" src="logokomnet.png" alt="LogoKomnet" width="200" height="100">
            <div><h1 style="font-weight:bold">UKM KOMPUTASI.NET <br><h6 class="desc" style="line-height:100%">Jl. Otto Iskandardinata No.64C Jakarta 13330<br> Telepon: 089529850208 &nbsp;&nbsp; Email:komputasi.net@stis.ac.id</h6></h1>
            </div>
        </div>
        <nav class="navlink">
            <a href="index.php">BERANDA</a>
            <a href="Kegiatan.php">KEGIATAN</a>
            <a href="Dokumen.php">DOKUMEN</a>
            <a href="#">ANGGOTA</a>
        </nav>
    </div>

<?php
   
try {
    $stmt = $conn->query("select * from anggota");
    //echo "Rows retrieved: ".$stmt->rowcount()."<br>\n";?>
    <button class="add" onclick="location.href='TambahAnggota.php'" type="button"> Tambah Data</button><br><br>
<?php
$tb = "<table class='view'><tr>
	<th>Nama Anggota</th>
	<th>Kelas Anggota</th>
	<th>Divisi Anggota</th>
	<th>Jabatan Anggota</th>
    
	</tr>";
while ($row = $stmt->fetch_assoc()) {
	$tb = $tb."<tr><td>".$row["nama"]."</td>
    <td>".$row["kelas"]."</td>
	<td>".$row["divisi"]."</td>
    <td>".$row["jabatan"]."</td>
	</tr>";
}
$tb.="</table>";
echo $tb;
$conn->close();
}
catch (Exception $e) {
exit("Apa aja: ".$e->getMessage()."<br>");
}
?>
    

</body>
</html>
