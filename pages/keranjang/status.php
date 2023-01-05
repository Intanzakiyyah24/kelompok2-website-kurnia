<?php
session_start();

include '../../config/config.php';
if (!isset($_SESSION['user']) OR empty($_SESSION['user']))
{
	echo "<script>alert('silahkan login');</script>";
  	echo "<script>location = 'index.php?';</script>";
}
	$id_user = $_SESSION["user"]['id_user'];

	$data = $conn->query("SELECT * FROM pembelian WHERE id_pembelian='$_GET[id]'");
	$showdata = $data->fetch_assoc();

	$status = $showdata["status_pembelian"];

	if ($status =="Barang Dikirim")
	{
		$conn->query("UPDATE pembelian SET status_pembelian='Selesai' WHERE id_pembelian ='$_GET[id]'");
		echo "<script>location='./riwayat.php';</script>";
	}
?>