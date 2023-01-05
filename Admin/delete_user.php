<?php
include '../config/config.php';
$id = $_GET['id'];

$conn->query("DELETE FROM user WHERE id_user='$id'");

//echo "<script>alert('Data terhapus');</script>";
echo "<script>location='index.php?halaman=user';</script>";
?>