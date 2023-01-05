<?php 
	include("../../config/config.php");
    include("../_partials/navbar.php");
    include("../_partials/header.php");
    ?>

<section class="page-section bg-dark" >
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-justify content-center">
          		<h1 class="text-black mt-0 text-center">Products</h1><br>
          		
      		</div>
		</div>
		<div class="row justify-content">
			<?php $data = $conn->query("SELECT * FROM produk");?>
			<?php while($show_data=$data->fetch_assoc()){ ?>
				<div class="col-md-3">
					<a href="../detail_produk/detail.php?id=<?php echo $show_data['id_produk']; ?>">
					<div class="card" style="height: 520px;">
						<img class="card-img-top  rounded" src="../pictures/<?php echo $show_data['gambar']; ?>" alt="Card image cap" height="200" width="250">
					</a>
					<div class="card-body">
						<strong><?php echo $show_data['nama_produk']; ?></strong>
						<p>
							Rp. <?php echo number_format($show_data['harga_produk']); ?><br>
							Stock : <?php echo $show_data['stok']; ?>
						</p>
						<p></p>
					</div>
					<div class="card-footer">
						<a href="../dasbor/beli.php?id=<?php echo $show_data['id_produk']; ?>" class="btn btn-primary">Beli</a>
						<a href="../detail_produk/detail.php?id=<?php echo $show_data['id_produk']; ?>" class="btn btn-secondary">Detail</a>
					</div>
				</div>
			
				<br>
			</div>
		<?php }?>
		</div>
	</div>
</section>

<?php  include("../_partials/footer.php") ?>