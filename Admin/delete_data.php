<?php
include '../config/config.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM produk WHERE id_produk='$id'");
$show_data = $data->fetch_assoc();
$pictures = $show_data['gambar'];
$pictures2 = $show_data['gambar_2'];
$pictures3 = $show_data['gambar_3'];
if (file_exists("../pictures/$pictures")) 
{
	unlink("../pictures/$pictures");
}
elseif (file_exists("../pictures/$pictures2"))
{
	unlink("../pictures/$pictures2");
}
elseif(file_exists("../pictures/$pictures3"))
{
	unlink("../pictures/$pictures3");
}


$conn->query("DELETE FROM produk WHERE id_produk='$id'");

//echo "<script>alert('Data terhapus');</script>";
echo "<script>location='index.php?halaman=output_data';</script>";
?>