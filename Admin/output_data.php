  <?php
    include '../config/config.php';
  ?> 
     <section  class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>


        <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">

<h1>Data Produk</h1>
<br>
<a href="index.php?halaman=input_data" class="btn btn-primary text-white"><i class="fas fa-upload"></i> Input Produk</a>
<a href="index.php?halaman=tarif" class="btn btn-primary"><i class="fas fa-upload"></i> Input Tarif Pengiriman</a>
<br><br>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th class="col-md-1">Gambar</th>
      <th>Nama Produk</th>
      <th>Harga Produk</th>
      <th class="col-md-1">Berat Produk</th>
      <th>Stok</th>
      <th class="col-md-2">Keterangan</th>
        </tr>
  </thead>
</tbody>
  <?php $nomor=1; ?>
    <?php $data=mysqli_query($conn,"SELECT * FROM produk"); ?>
    <?php while($show_data = mysqli_fetch_assoc($data)){ ?>
  <tr>
    <td><?php echo $nomor; ?></td>
    <td><img src= "../pages/pictures/<?php echo $show_data['gambar'];?>" width="60" height="60" class="img-rounded"></td>
    <td><?php echo $show_data['nama_produk']; ?></td>
    <td>Rp. <?php echo number_format($show_data['harga_produk']); ?></td>
    <td><?php echo $show_data['berat_produk']*0.001; ?> Kg</td>
    <td><?php echo $show_data['stok']; ?></td>
    
    <td><a href="index.php?halaman=edit_data&id=<?php echo $show_data['id_produk']; ?>"class="btn btn-warning">Ubah Data</i></a>
      <a href="index.php?halaman=stock&id=<?php echo $show_data['id_produk']; ?>"class="btn btn-primary">Tambah Data</i></a>
        <a href="index.php?halaman=delete_data&id=<?php echo $show_data['id_produk']; ?>"class= "btn btn-danger" onclick="return confirm('Hapus data?')">Hapus Data</a>
        
      </td> 
  </tr>
  <?php $nomor++; ?>
  <?php } ?>
</tbody>
</table>
</div>
<script type="text/javascript"src="ckeditor/ckeditor.js"></script>