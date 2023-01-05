<h1>Data Pembelian & Pengiriman</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama User</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Total Harga</th>
			<th class="col-md-2">Keterangan</th>
		</tr>
	</thead>

	<tbody>
		<?php 
		$nomor=1;
		$data = $conn->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id_user");
		?>
		<?php while($showdata=$data->fetch_assoc()) {?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $showdata["nama_user"]; ?></td>
			<td><?php echo $showdata["tanggal_pembelian"]; ?></td>
			<td><?php echo $showdata["status_pembelian"]; ?></td>
			<td>Rp. <?php echo number_format($showdata["total_pembelian"]); ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $showdata['id_pembelian']; ?>" class="btn btn-info">Detail</a>
				<?php if($showdata['status_pembelian']!=="pending"): ?>
					<a href="index.php?halaman=detail_payment&id=<?php echo $showdata['id_pembelian']; ?>" class="btn btn-success">Pembayaran</a>
				<?php endif ?>
			</td>
		</tr>
		<?php $nomor++?>
	<?php }?>
	</tbody>
</table>