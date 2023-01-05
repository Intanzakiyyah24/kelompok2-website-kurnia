<h1>Data User</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama User</th>
			<th>Email</th>
			<th>Telephone</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $data=$conn->query("SELECT * FROM user"); ?>
		<?php while($show_data =$data->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $show_data['nama_user']; ?></td>
			<td><?php echo $show_data['email_user']; ?></td>
			<td><?php echo $show_data['hp_user']; ?></td>
			<td>
				<a href="index.php?halaman=delete_user&id=<?php echo $show_data['id_user']; ?>" class="btn btn-danger" onclick="return confirm('Hapus data?')">Hapus Data</i></a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>