<?php
	include("../../config/config.php");
    include("../_partials/navbar.php");
    include("../_partials/header.php");

if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
	echo "<script>alert('Keranjang anda kosong, silahkan belanja terlebih dahulu.')</script>";
	echo "<script>location='../dasbor/index.php';</script>
";
}

?>
<section class="page-section bg-dark" id="cart">
	<div class="container">
		<div class="row">
			<h1 class="text-white">Keranjang Belanja</h1>
			<hr class="divider my-8">
			
			<!-- Start Of Table -->
		<div class="table-responsive">
			<table class="table table-bordered table-secondary">

				<thead class="table-info">
					<tr>
						<th>No</th>
						<th>Gambar</th>
						<th>Nama Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total Harga</th>
						<th>Hapus Produk</th>
					</tr>
				</thead>

				<tbody>
					<?php $nomor=1; ?>
					<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
					<?php 
					$data = $conn->query("SELECT * FROM produk WHERE id_produk='$id_produk'"); 
					$show_data = $data->fetch_assoc();
					$total_harga = $show_data["harga_produk"]*$jumlah;
					?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><img class="rounded" src="../pictures/<?php echo $show_data['gambar']; ?>" height="80" width="80"></td>
						<td><?php echo $show_data["nama_produk"]; ?></td>
						<td>Rp. <?php echo number_format($show_data["harga_produk"]); ?></td>
						<td><?php echo $jumlah; ?></td>
						<td>Rp. <?php echo number_format($total_harga); ?></td>
						<td><a href="./cart_delete.php?id=<?php echo $id_produk ?>" class="btn btn-secondary">Hapus</a></td>
					</tr>
					<?php $nomor++; ?>
					<?php endforeach ?>
				</tbody>

			</table>
		</div>
			<!-- End Of Table -->
			
			<a href="../dasbor/index.php" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Continue </a> &nbsp;
			<a href="./checkout.php" class="btn btn-secondary">Checkout <i class="fas fa-arrow-right"></i></a>
		</div>
	</div>
</section>
<?php 
      include("../_partials/footer.php");
    ?>