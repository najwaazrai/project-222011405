<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  
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
            <a href="#">DOKUMEN</a>
            <a href="Anggota.php">ANGGOTA</a>
        </nav>
    </div>

<div><h1>Dokumen Kegiatan</h1></div>
<form action="Upload.php" method="post" enctype="multipart/form-data">
    <select class="form-control" name="combo2" id="combo2">
        <option value=""> Pilih Kegiatan :</option>
        <?php
            include 'Connection.php';
            $query = "SELECT * FROM kegiatan ORDER BY nama ASC";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $res1 = $stmt->get_result();
            $i = 1;
            while ($row = $res1->fetch_assoc()) {
                    echo "<option value='" . $row['nama']. "'>" . $row['nama'] . "</option>";
                    $i++;
            }
        ?>
    </select>
    <br>
    
    <input type="file" value="Browse" name="file">
    <button class="add" type="submit" name="uploadedfile"> Upload</button><br><br>
</form>

<table class="view">
    <tr>
    <th>Nama Kegiatan</th>
    <th>Ekstensi File</th>
    <th>Download</th>
    </tr>
    <?php include 'Connection.php';
    $stmt = $conn->query("select * from dokumen");
    while($row=$stmt->fetch_assoc()){?>
        <tr>
        <td><?php echo $row['nama'];?></td>
        <td><?php echo $row['mime'];?></td>
        <td><?php echo "<a target='_blank' href='View.php?nama=".$row['nama']."'> Dokumen_Kegiatan_".$row['nama']."</a>" ;?></td>
        </tr>
    <?php }?>
</table>
<?php
// try {
//     $stmt = $conn->query("select * from kegiatan");
// $tb = "<table class='view'><tr>
// 	<th>Dokumen Kegiatan Kegiatan</th>
// 	<th>Action</th>
// 	</tr>";
// while ($row = $stmt->fetch_assoc()) {
// 	$tb = $tb."<tr><td>".$row["nama"]."</td>
// 	<td>".$row["deskripsi"]."</td>
//     <td>".$row["tanggal"]."</td>
// 	<td>".$row["status"]."</td>
// 	<td><a href='php09G.php?slot=".$row["nama"]."'><img src='edit.png' style='width:30px;height:30px;'></a> 
// 		<a href='php09H.php?slot=".$row["nama"]."'><img src='remove.png' style='width:30px;height:30px;'></a> </td>
// 	</tr>";
// }
// $tb.="</table>";
// echo $tb;
// $conn->close();
// }
// catch (Exception $e) {
// exit("Apa aja: ".$e->getMessage()."<br>");
// }
?>

    

</body>
</html>