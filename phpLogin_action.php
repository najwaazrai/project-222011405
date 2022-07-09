<?php
include 'Connection.php';
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

try {
$stmt = $conn->query("select * from listuser where username='".$_SESSION['username']."'"."and password='".$_SESSION['password']."'");
$row = $stmt->fetch_assoc();
if($row){
		header("Location: index.php");
}
else {
	echo "<script>
      window.location.href = 'Login.php';
      alert('Username/password salah');
</script>";
}
$pdo = NULL;
}
catch (PDOException $e) {
exit("PDO Error: ".$e->getMessage()."<br>");
}

?>