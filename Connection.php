<?php
$server = "remotemysql.com";
$user = "RgUBicYuZf";
$pass = "g7l79FtdKl";
$database = "RgUBicYuZf";
$conn = new mysqli($server, $user, $pass, $database);
if ($conn->connect_error) {
    die("<script>alert('Connection Failed.')</script>");
}
?>