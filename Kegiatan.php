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
            <a href="#">KEGIATAN</a>
            <a href="Dokumen.php">DOKUMEN</a>
            <a href="Anggota.php">ANGGOTA</a>
        </nav>
    </div>
<form action="">
      <label >Cari nama Kegiatan: </label>
      <br>
      <input type="text" id="txt1" onkeyup="showHint()">
</form>
        
<?php
    $stmt = $conn->query("select * from kegiatan");
    
?>
    <script type="text/javascript">
    function delete_user(uid)
    {
        if (confirm('Are You Sure to Delete this Record?'))
        {
            window.location.href = 'HapusKegiatan.php?nama=' + uid;
        }
    }
    </script>
    <button class="add" onclick="location.href='TambahKegiatan.php'" type="button"> Tambah Data</button><br><br>
    <div id="txtHint"> 
        
        <table class="view">
                <thead>
                <tr>
	            <th>Nama Kegiatan</th>
	            <th>Deskripsi</th>
	            <th>Tanggal</th>
	            <th>Status</th>
                <th>Action</th>
	            </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = $stmt->fetch_assoc() ) { ?>
                <tr>
                    <!-- <td><?php echo $i++; ?></td> -->
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["deskripsi"]; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <a href="javascript: delete_user('<?php echo $row['nama']; ?>')"><img src="remove.png" style="width:30px;height:30px;" /></a>
                        <?php echo "<a href='EditKegiatan.php?nama=".$row["nama"]."'><img src='edit.png' style='width:30px;height:30px;'></a>";?>
                    </td>
                </tr>
                <?php } ?>
        </table>
    </div>

<script type="text/javascript">
    function showHint(){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange= function(){
            if (xhr.readyState != 4) {
            return;
        } else {
            if (xhr.status == 200) {
                var plholder = document.getElementById("txtHint");
                plholder.innerHTML=xhr.responseText;
            } else {
                
            }
        }
        
    }
    var keyword = document.getElementById("txt1").value
    xhr.open("GET","Suggestion.php?cari="+ keyword + "","true")
    xhr.send();
}
</script>
</body>
</html>
