<?php
	include("../../config/config.php");
    include("../_partials/navbar.php");
    include("../_partials/header.php");

if (!isset($_SESSION["user"]))
{
	echo "<script>alert('Silahkan Login');</script>";
	echo "<script>location='../dasbor/index.php';</script>";
}

 ?>
<section class="page-section bg-dark" id="checkout">
	<div class="container">
		<div class="row justify-content-center">
			<h1 class="text-white">Checkout</h1>
		</div>
		<div class="row">
			<h1 class="text-white"></h1>
			<!-- Start Of Form -->
			<form method="post" class="">
				<div class="row">

					<div class="col-md-4">
						<div class="form-group">
							<input type="text" readonly value="<?php echo $_SESSION["user"]['nama_user'] ?>" class="form-control">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<input type="number" readonly value="<?php echo $_SESSION["user"]['hp_user'] ?>" class="form-control">
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<input type="text" placeholder="Alamat Pengiriman" value="<?php echo $_SESSION["user"]['alamat_user'] ?>" class="form-control" name="alamat_pengiriman_barang">
						</div>
					</div>
					
					<div class="col-md-4">
						<select class="form-control" name="id_ongkir">
							<option value="">Pilih Ongkir</option>
							<?php $data = $conn->query("SELECT * FROM tarif") ?>
							<?php while ($pilih_ongkir =  $data->fetch_assoc()){?>
								<option value="<?php echo $pilih_ongkir['id_ongkir'] ?>">
									<?php echo $pilih_ongkir["kota"] ?> - Rp. <?php echo number_format($pilih_ongkir["tarif_pengiriman"]) ?>
								</option>
							<?php }?>
						</select>
					</div>
					
					<div class="col-md-4">
					<button class="btn btn-success" name="checkout">Konfirmasi Pesanan  <i class="fas fa-arrow-right"></i></button>
					</div>
					<br><br>
				</div>
			</form>

			<!-- Start Of Table -->
			<table class="table table-bordered table-secondary" >
				<thead class="table-info">
					<tr>
						<th>No</th>
						<th>Produk</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Total Harga</th>
					</tr>
				</thead>

				<tbody>
					<?php $nomor=1; ?>
					<?php $total_belanja=0; ?>
					<?php foreach($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
					<?php

					$data = $conn->query("SELECT * FROM produk WHERE id_produk ='$id_produk'");
					$show_data = $data->fetch_assoc();
					$total_harga = $show_data["harga_produk"]*$jumlah;
					?>

					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $show_data["nama_produk"];?></td>
						<td>Rp. <?php echo number_format($show_data["harga_produk"]); ?></td>
						<td><?php echo $jumlah; ?></td>
						<td>Rp. <?php echo number_format($total_harga); ?></td>
					</tr>
					<?php $nomor++; ?>
					<?php $total_belanja+=$total_harga; ?>
				<?php endforeach?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="4">Total Belanja</th>
						<th><?php echo number_format($total_belanja); ?></th>
					</tr>
				</tfoot>
			</table>
			<!-- End Of Table -->

		</div>
	</div>
</section>

<?php 

if (isset($_POST["checkout"]))
{
	$id_user = $_SESSION["user"]["id_user"];
	$id_ongkir = $_POST["id_ongkir"];
	$tanggal_pembelian = date("Y-m-d");
	$alamat_pengiriman_tujuan = $_POST['alamat_pengiriman_barang'];

	$data = $conn->query("SELECT * FROM tarif WHERE id_ongkir ='$id_ongkir'");
	$data_ongkir = $data->fetch_assoc();
	$nama_kota = $data_ongkir['kota'];
	$tarif = $data_ongkir['tarif_pengiriman'];
	$total_pembelian = $total_belanja + $tarif;

	if (is_numeric($alamat_pengiriman_tujuan))
	{
		echo "<script>alert('Dilarang menggunakan angka pada alamat!');</script>";
	}
	else
	{
	//Insert Data Into Table pembelian
	$conn->query("INSERT INTO pembelian(id_user,id_ongkir,tanggal_pembelian,total_pembelian,nama_kota,tarif,alamat_pengiriman) VALUES ('$id_user','$id_ongkir','$tanggal_pembelian','$total_pembelian','$nama_kota','$tarif','$alamat_pengiriman_tujuan')");
	//Get ID Pembelian
	$id_pembelian_tadi = $conn->insert_id;

	foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
	{
		$data = $conn->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
		$show_produk_data = $data->fetch_assoc();

		$tanggal_nota = date("Y-m-d");
		$nama_barang = $show_produk_data['nama_produk'];
		$harga = $show_produk_data['harga_produk'];
		$berat = $show_produk_data['berat_produk'];
		$berat_total = $show_produk_data['berat_produk']*$jumlah;
		$total = $show_produk_data['harga_produk']*$jumlah;

		$conn->query("INSERT INTO nota (id_pembelian,id_produk,nama_barang,harga,berat,jumlah,total_berat,total,tanggal) VALUES ('$id_pembelian_tadi','$id_produk','$nama_barang','$harga','$berat','$jumlah','$berat_total',$total,'$tanggal_nota')");

	}
	//
	$conn->query("UPDATE produk SET stok=stok-$jumlah WHERE id_produk='$id_produk' ");
	//empty cart
	unset($_SESSION["keranjang"]);

	//echo "<script>location='index.php?halaman=riwayat#riwayat'</script>";
	echo "<script>location='./invoice.php?id=$id_pembelian_tadi'</script>";
}
}

?>
<?php 
      include("../_partials/footer.php");
    ?>