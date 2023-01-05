<?php
$alldata=array();
$date_start = date("Y-m-d");
$date_end = date("Y-m-d");

if (isset($_POST["proses"]))
{
	$date_start = $_POST["mulai"];
	$date_end = $_POST["selesai"];
	$data = $conn->query("SELECT * FROM pembelian LEFT JOIN user on pembelian.id_user=user.id_user WHERE tanggal_pembelian BETWEEN '$date_start' AND '$date_end'");
	while ($tampil = $data->fetch_assoc())
	{
		$alldata[]=$tampil;
	}
}  
?>
<h1>Laporan Pembelian</h1>

<form method="post">
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label>Tanggal Awal</label>
				<input type="date" class="form-control" name="mulai" value="<?php echo $date_start?>">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Tanggal Akhir</label>
				<input type="date" class="form-control" name="selesai" value="<?php echo $date_end?>">
			</div>
		</div>
		<div class="col-md-2">
			<label>&nbsp;</label><br>
			<button class="btn btn-primary" name="proses"><i class="far fa-calendar-alt"></i> Proses</button>
		</div>
	</div>
</form>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>User</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Total</th>
		</tr>
	</thead>

	<tbody>
<?php $total=0; ?>
<?php foreach ($alldata as $key =>$value): ?>
<?php $total+= $value['total_pembelian'] ?>
		<tr>
			<td><?php echo $key+=1 ?></td>
			<td><?php echo $value["nama_user"]; ?></td>
			<td><?php echo $value["tanggal_pembelian"]; ?></td>
			<td><?php echo $value["status_pembelian"]; ?></td>
			<td>Rp. <?php echo number_format($value["total_pembelian"]); ?></td>
		</tr>
<?php endforeach ?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="4">Total</th>
			<th>Rp. <?php echo number_format($total); ?></th>
		</tr>
	</tfoot>
</table>