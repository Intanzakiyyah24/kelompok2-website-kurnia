<h1>Detail Pembelian</h1>

<?php
$data = $conn->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id_user WHERE pembelian.id_pembelian='$_GET[id]'");
$show_data = $data->fetch_assoc();
?>

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
			<?php echo $show_data['hp_user']; ?><br>
			<?php echo $show_data['email_user']; ?>

		<br>
	</div>

	<div class="col-md-4">
		<h3>Pengiriman</h3>
		
		<strong><?php echo $show_data["nama_kota"]; ?></strong><br>
		Ongkos Kirim: Rp. <?php echo number_format($show_data['tarif']);?><br>
		Alamat: <?php echo $show_data['alamat_pengiriman']; ?>
		<br>
	</div>

	<a href="index.php?halaman=pengiriman" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
	<br><br>
	<table class="table table-bordered">

		<thead>
			<tr>
				<th>No</th>
				<th>Nama Produk</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Total Harga</th>
			</tr>
		</thead>

		<tbody>
			<?php
			$nomor=1;
			$data = $conn->query("SELECT * FROM nota JOIN produk ON nota.id_produk=produk.id_produk WHERE nota.id_pembelian='$_GET[id]' ");
			?>
			<?php while($showdata = $data->fetch_assoc()) {?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $showdata['nama_produk']; ?></td>
				<td>Rp. <?php echo number_format($showdata['harga_produk']); ?></td>
				<td><?php echo $showdata['jumlah']; ?></td>
				<td>Rp. <?php echo number_format($showdata['harga_produk']*$showdata['jumlah']); ?></td>
			</tr>
			
		</tbody>
		<tfoot>
			<tr>
				<th colspan="4">Total Belanja</th>
				<th>Total: Rp. <?php echo number_format($showdata['harga_produk']*$showdata['jumlah']); ?></th>
			</tr>
		</tfoot>
		<?php $nomor++; ?>
		<?php } ?>
	</table>
