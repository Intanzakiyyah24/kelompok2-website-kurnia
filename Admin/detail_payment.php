<h1>Data Pembayaran</h1>

<?php
$id_pembelian_user = $_GET['id'];

$data = $conn->query("SELECT * FROM pembayaran WHERE id_pembelian='$id_pembelian_user'");
$show_data = $data->fetch_assoc();

$pem = $conn->query("SELECT * FROM pembelian WHERE id_pembelian='$id_pembelian_user'");
$show = $pem->fetch_assoc();
?>

<div class="row">
	<div class="col-md-6">
		<table class="table table-bordered">
		<tr>
			<th>Nama</th>
			<td><?php echo $show_data['nama']?></td>
		</tr>
		<tr>
			<th>Bank</th>
			<td><?php echo $show_data['bank']?></td>
		</tr>
		<tr>
			<th>Jumlah</th>
			<td>Rp. <?php echo number_format($show_data['nominal'])?></td>
		</tr>
		<tr>
			<th>Tanggal</th>
			<td><?php echo $show_data['tanggal']?></td>
		</tr>

		<tr>
			<th>Status</th>
			<td><?php echo $show['status_pembelian']?></td>
		</tr>
	</table>
	<a href="index.php?halaman=pengiriman" class="btn btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
	</div>

	<div class="col-md-6">
		<img src="../Payment/<?php echo $show_data['bukti'] ?>" alt="" height="300" width="300">
	</div>
</div>

	<form method="post">
		<div class="form-group col-md-4">
			<label>No. Resi Pengiriman</label>
			<input type="text" name="resi" class="form-control" placeholder="Cth: JD0123AS42">
		</div>
		<div class="form-group col-md-4">
			<label>Status</label>
			<select class="form-control" name="status"> 
				<option value="">Pilih Status</option>
				<option value="Barang Dikirim">Barang Dikirim</option>
				<option value="Batal">Batal</option>
			</select>
		</div>
		<div class="form-group col-md-12">
			<button class="btn btn-primary" name="proses"><i class="fas fa-upload"></i> Proses</button>
		</div>
	</form>

<?php 
if (isset($_POST["proses"]))
{
	$resi_pengiriman = $_POST["resi"];
	$status = $_POST["status"];

	$conn->query("UPDATE pembelian SET resi_pengiriman='$resi_pengiriman',status_pembelian='$status' WHERE id_pembelian='$id_pembelian_user'");
	echo "<script>location='index.php?halaman=pengiriman';</script>";
}
?>