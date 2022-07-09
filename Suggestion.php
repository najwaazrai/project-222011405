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
                include 'Connection.php';
                $keyword=$_GET['cari'];
                $stmt=$conn->query("Select * from kegiatan where nama LIKE '%".$keyword."%'");
                
                while($row = $stmt->fetch_assoc() ) { ?>
                <tr>
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