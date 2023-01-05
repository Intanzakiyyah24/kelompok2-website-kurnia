<?php
include("../../config/config.php");
include("../_partials/navbar.php");
include("../_partials/header.php");

$data = $conn->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id_user WHERE pembelian.id_pembelian='$_GET[id]'");
$show_data = $data->fetch_assoc();
?>

<?php 

$id_user_now = $show_data["id_user"];

$id_user_login = $_SESSION["user"]["id_user"];

if ($id_user_now !== $id_user_login)
{
	echo "<script>alert('User Salah');</script>";
	echo "<script>location='./riwayat.php'</script>";
	exit();
}
?>

<section class="page-section bg-dark" id="invoice">
	<div class="container">
		<div class="row justify-content-center">
			<h1 class="text-white">Invoice Pelanggan : <?php echo $show_data["nama_user"]; ?></h1>
		</div>
		<br><br>
		<div class="row text-white">

	<div class="col-md-4">
		<h3>Pembelian</h3>
		
		<strong>No. Pembelian: <?php echo $show_data['id_pembelian']?></strong><br>
		Tanggal: <?php echo $show_data['tanggal_pembelian'];?><br>
		Total: Rp. <?php echo number_format($show_data['total_pembelian']);?>
		<br>
	</div>

	<div class="col-md-4">
		<h3>Pelanggan</h3>
		
		<strong><?php echo $show_data['nama_user'];?></strong><br>
		<p>
			<?php echo $show_data['hp_user']; ?><br>
			<?php echo $show_data['email_user']; ?>
		</p>
		<br>
	</div>

	<div class="col-md-4">
		<h3>Pengiriman</h3>
		<strong><?php echo $show_data["nama_kota"]; ?></strong><br>
		Ongkos Kirim: Rp. <?php echo number_format($show_data['tarif']);?><br>
		Alamat: <?php echo $show_data['alamat_pengiriman']; ?>
		<br>
	</div>
	<div class="alert alert-bnk">
			<strong>
			Silahkan Melakukan Pembayaran ke<br>	
			Bank BCA - 7435005977 a.n. Muhammad Rizky Siregar
				</strong>
			</div>
	<div class="container">
	<a href="./riwayat.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
	<a href="print_invoice.php?id=<?php echo $show_data['id_pembelian']; ?>
	"target="_blank" class="btn btn-info "><i class="fas fa-print"></i> Print Invoice</a>
	</div>
	<br><br>
	<table class="table table-bordered table-secondary rounded">
		<thead class="table-info">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama Produk</th>
				<th>Harga</th>
				<th>Berat</th>
				<th>Jumlah</th>
				<th>Total Berat</th>
				<th>Total Harga</th>

			</tr>
		</thead>

		<tbody>
			<?php
			$nomor=1;
			$data = $conn->query("SELECT * FROM nota WHERE id_pembelian='$_GET[id]'");
			?>
			<?php while ($show_data_nota=$data->fetch_assoc()){?>
			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $show_data_nota["tanggal"]; ?></td>
				<td><?php echo $show_data_nota["nama_barang"]; ?></td>
				<td><?php echo number_format($show_data_nota["harga"]);?></td>
				<td><?php echo $show_data_nota["berat"]*0.001; ?> Kg</td>
				<td><?php echo $show_data_nota["jumlah"]; ?></td>
				<td><?php echo $show_data_nota["total_berat"]*0.001; ?> Kg</td>
				<td><?php echo number_format($show_data_nota["total"]);?></td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>
		</tbody>
		<tfoot class="table-secondary">
			<tr>
				<th colspan="7">Total Belanja</th>
				<th>Total: Rp. <?php echo number_format($show_data['total_pembelian']);?></th>
			</tr>
		</tfoot>

	</table>

			
		</div>
	</div>
</section>

<?php include("../_partials/footer.php");?>