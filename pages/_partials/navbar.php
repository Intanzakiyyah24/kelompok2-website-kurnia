<?php
session_start();
include_once('../../config/config.php');
?>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../dasbor/index.php"><img alt="logo" height="65" src="../../img/kurnia.png" width="65" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0 ">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../dasbor/index.php">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../kategori/atk.php">Products</a>            
          </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../about/about.php">About</a>
          </li>
          </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../keranjang/cart.php"> Cart </a>
            </li>
          <?php if(isset($_SESSION["user"])): ?>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../keranjang/riwayat.php"> Order History </a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../dasbor/logout.php">Logout</a>
            </li>
          <?php else: ?>
          <li class="nav-item">
            <div class="dropdown">
              <a class="dropdown-toggle nav-link " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-in-alt"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a type="button" class="dropdown-item btn btn-default" data-toggle="modal" data-target="#login" href="#login">Login</a>
                <a type="button" class="dropdown-item btn btn-default" data-toggle="modal" data-target="#daftar">Daftar</a>
              </div>
            </div>            
          </li>
          <?php endif ?>
          <br>
          


        </ul>
      </div>
    </div>
  </nav>

 

<!-- Modal Daftar -->
<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Daftar Pelanggan Baru</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel-body">
            <form method="post" class="form-horizontal">

              <div class="form-group">
                <label class="control-label col-md-3">Nama</label>
                <div class="col-md-12">
                <input type="text" class="form-control" onkeypress="return event.charCode < 48 || event.charCode  >57" name="nama" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3">Email</label>
                <div class="col-md-12">
                  <input type="email" class="form-control" name="email" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3">Password</label>
                <div class="col-md-12">
                  <input type="password" class="form-control" name="password" maxlength="6" required>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3">Alamat</label>
                <div class="col-md-12">
                  <textarea class="form-control" name="alamat" required></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3">No Telfon/HP</label>
                <div class="col-md-12">
                  <input type="number" maxlength="14" class="form-control" name="telepon" required>
                </div>
              </div>

            
            <?php 
        //jika ada tombol daftar(ditekan tombol daftar)
            if (isset($_POST["simpan"])){
        //mengambil isian nama,email,password,alamat,telepon
              $nama = $_POST["nama"];
              $email = $_POST["email"];
              $password = $_POST["password"];
              $alamat = $_POST["alamat"];
              $telepon = $_POST["telepon"];

        // cek apakah email sudah digunakan
              $show_data = $conn->query("SELECT * FROM user WHERE email_user='$email'");
              $data_equal = $show_data->num_rows;

              if ($data_equal==1){
                echo "<script>alert('pendaftaran gagal,email sudah digunakan');</script>";
                echo "<script>location='?';</script>";
              }else{
        //query insert ke tabel user
                $conn->query("INSERT INTO user(email_user,password_user,nama_user,hp_user,alamat_user) VALUES ('$email','$password','$nama','$telepon','$alamat')");
                echo "<script>alert('Anda berhasil daftar, Silahkan login');</script>";
                echo "<script>location='index.php?';</script>";
              }
            }
            ?>
          </div>
        </div>
      <div class="modal-footer">
           
            <div class="col-md-12 col-md-offset-3">
             <button class="btn btn-primary" name="simpan">Daftar</button>
           </div>
            
      </div>
      </form>
      
    </div>
  </div>
</div>

<!-- Modal Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Login Pelanggan</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <div class="panel panel-default">
          <div class="panel-body">
            <form method="post">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
              </div>
          </div>
        </div>
        </div>
        <?php 
if (isset($_POST['login']))
{
  $email = $_POST["email"];
  $password = $_POST["password"];

  $data = $conn->query("SELECT * FROM user WHERE email_user='$email' AND password_user='$password'");
  $data_equal = $data->num_rows;

  if ($data_equal==1)
  {
    $account = $data->fetch_assoc();
    $_SESSION["user"] = $account;

    if (isset($_SESSION["keranjang"]) OR !empty($_SESSION["keranjang"]))
    {
      echo "<script>location='?';</script>";
    }
    else
    {
      echo "<script>location='?';</script>";
    }
  }
  else
  {
    echo "<script>alert('anda gagal login, periksa akun anda');</script>";
    echo "<script>location='?';</script>";
  }
}
?>
      <div class="modal-footer">
           
            <div class="col-md-12 col-md-offset-3">
             <button class="btn btn-primary" name="login">Login</button>
           </div>
            
      </div>
      </form>
      
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
  </section>