<?php
include '../config/config.php';
$data= $conn->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$show_data= $data->fetch_assoc();
?>

<section class="statistics">
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

              <h1><bg>
                Ubah Data Produk
              </h1></bg>
        <form method="post" enctype="multipart/form-data">
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Nama Produk</label>
                      <div class="col-sm-6">
                        <input type="text" name="nama_produk" class="form-control is-valid" placeholder="Nama Produk" value="<?php echo $show_data['nama_produk']; ?>">
                </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Harga Produk</label>
                      <div class="col-sm-2">
                      <input type="number" max="1000000" name="harga" class="form-control is-valid" placeholder="Harga Produk" value="<?php echo $show_data['harga_produk']; ?>">
                  </div>
                  </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Berat Produk</label>
                      <div class="col-sm-1">
                      <input type="number" max="1000" name="berat" class="form-control is-valid" placeholder="Berat = Gr" value="<?php echo $show_data['berat_produk']; ?>">
                  </div>
                  </div>

                

                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Keterangan</label>
                      <div class="col-sm-8">
                       <textarea class="ckeditor" id="ckeditor" name="keterangan"><?php echo $show_data["detail_produk"]; ?></textarea> 
                      </div>
                </div>
                
                <div class="form-group">
                  <img src="../pages/pictures/<?php echo $show_data['gambar']; ?>" height="300" width="300" class="img-thumbnail">
                </div>

                  <div class="form-group row has-success">
                      <div class="col-sm-2">
                        <input type="file" name="gambar" class="form-control is-valid" placeholder="=Gambar lokasi">
                      </div>
                  </div>

                  <div class="form-group">
                  <img src="../pages/pictures/<?php echo $show_data['gambar_2']; ?>"height="300" width="300"class="img-thumbnail">
                  </div>

                  <div class="form-group row has-success">
                      <div class="col-sm-2">
                        <input type="file" name="gambar_2" class="form-control is-valid" placeholder="=Gambar lokasi">
                      </div>
                  </div>

                  <div class="form-group">
                  <img src="../pages/pictures/<?php echo $show_data['gambar_3']; ?>"height="300" width="300"class="img-thumbnail">
                  </div>
                  <div class="form-group row has-success">
                      <div class="col-sm-2">
                        <input type="file" name="gambar_3" class="form-control is-valid" placeholder="=Gambar lokasi">
                      </div>
                  </div>
                <button class="btn btn-primary" name="ubah">Ubah Data</button> &nbsp; <a href="index.php?halaman=output_data" class="btn btn-default">Kembali</a>
                </form>
                </div>
              </div>
          </div>
      </section> 
       <script type="text/javascript"src="ckeditor/ckeditor.js"></script>

 

<?php

if (isset($_POST['ubah']))
{


  $nama_produk = $_POST["nama_produk"];
  $harga = $_POST["harga"];
  $berat = $_POST["berat"];
  $detail_produk = $_POST["keterangan"];

  $nama=$_FILES['gambar']['name'];
  $lokasifoto = $_FILES['gambar']['tmp_name'];
  
  $nama2=$_FILES['gambar_2']['name'];
  $lokasifoto2 = $_FILES['gambar_2']['tmp_name'];

  $nama3=$_FILES['gambar_3']['name'];
  $lokasifoto3 = $_FILES['gambar_3']['tmp_name'];
	// Jika Foto Dirubah
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../pages/pictures/$nama");
    

    $conn->query("UPDATE produk SET nama_produk='$nama_produk',harga_produk='$harga',berat_produk='$berat',gambar='$nama',detail_produk='$detail_produk' WHERE id_produk='$_GET[id]' ");
        
	}
  else
	{
        $conn->query("UPDATE produk SET nama_produk='$nama_produk',harga_produk='$harga',berat_produk='$berat',detail_produk='$detail_produk' WHERE id_produk='$_GET[id]' ");
  }
  if (!empty($lokasifoto2))
  {
    move_uploaded_file($lokasifoto2, "../pages/pictures/$nama2");
    $conn->query("UPDATE produk SET nama_produk='$nama_produk',harga_produk='$harga',berat_produk='$berat',gambar_2='$nama2',detail_produk='$detail_produk' WHERE id_produk='$_GET[id]' ");
    
  }
  else
	{
        $conn->query("UPDATE produk SET nama_produk='$nama_produk',harga_produk='$harga',berat_produk='$berat',detail_produk='$detail_produk' WHERE id_produk='$_GET[id]' ");
  }
  if(!empty($lokasifoto3))
  {
    move_uploaded_file($lokasifoto3, "../pages/pictures/$nama3");
    $conn->query("UPDATE produk SET nama_produk='$nama_produk',harga_produk='$harga',berat_produk='$berat',gambar_3='$nama3',detail_produk='$detail_produk' WHERE id_produk='$_GET[id]' ");
  }
	else
	{
        $conn->query("UPDATE produk SET nama_produk='$nama_produk',harga_produk='$harga',berat_produk='$berat',detail_produk='$detail_produk' WHERE id_produk='$_GET[id]' ");
  }
  echo "<script>alert('Data Produk Telah Diubah');</script>";
  echo "<script>location='index.php?halaman=output_data';</script>";
  }
?>