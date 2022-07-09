<?php
    $dbh = new PDO("mysql:host=remotemysql.com;
                    dbname=RgUBicYuZf",
                    "RgUBicYuZf",
                    "g7l79FtdKl");
    if(isset($_POST['uploadedfile'])){
         $name = $_FILES['file']['name'];
         $type = $_FILES['file']['type'];
         $data = file_get_contents($_FILES['file']['tmp_name']);
        $namakegiatan = $_POST['combo2'];
       
        $stmt=$dbh->prepare("INSERT INTO dokumen VALUES (?,?,?)");
        // $stmt->bind_param("sbs",$namakegiatan, $data, $type);
        $stmt->bindParam(1,$namakegiatan);
        $stmt->bindParam(2,$data);
        $stmt->bindParam(3,$type);
        $stmt->execute();    
        
    }
    header("Location:Dokumen.php");
    
?>