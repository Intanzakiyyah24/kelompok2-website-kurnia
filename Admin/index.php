<?php
session_start();
// koneksi database  
include '../config/config.php';
if (!isset($_SESSION['admin']))
{
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Kurnia Stationery</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   

   
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Kurnia Stationery</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp;  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <br><br>
					</li>
				
					

<li><a href="index.php?halaman=output_data"><i class="fas fa-box"></i><strong> Produk</strong></a></li>
<li><a href="index.php?halaman=pengiriman"><i class="fas fa-dolly-flatbed"></i><strong>Pengiriman & Pembelian</strong></a></li>
<li><a href="index.php?halaman=rekap"><i class="fas fa-clipboard-list"></i><strong> Laporan</strong></a></li>
<li><a href="index.php?halaman=user"><i class="fas fa-user"></i><strong> Data User</strong></a></li>
<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><strong> Logout</strong></a></li>



                     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
            if (isset($_GET['halaman']))
            {
                
                if ($_GET['halaman']=="input_data")
                {
                    include 'input_data.php';
                }
                elseif ($_GET['halaman']=="output_data")
                {
                    include 'output_data.php';
                }
                elseif ($_GET['halaman']=="delete_data")
                {
                    include 'delete_data.php';
                }
                elseif ($_GET['halaman']== "edit_data")
                {
                    include 'edit_data.php';
                }
                elseif ($_GET['halaman']=="home")
                {
                    include 'home.php';
                }
                elseif($_GET['halaman']=="stock")
                {
                    include 'input_data_stok.php';
                }
                elseif($_GET['halaman']=="pengiriman")
                {
                    include'pengiriman.php';
                }
                elseif($_GET['halaman']=="detail")
                {
                    include 'detail.php';
                }
                elseif($_GET['halaman']=="detail_payment")
                {
                    include 'detail_payment.php';
                }
                elseif($_GET['halaman']=="user")
                {
                    include 'user.php';
                }
                elseif($_GET['halaman']=="rekap")
                {
                    include 'rekap.php';
                }
                elseif($_GET['halaman']=="tarif")
                {
                    include 'tarif.php';
                }
                elseif($_GET['halaman']=="delete_user")
                {
                    include 'delete_user.php';
                }
            } 
            else
            {
                include 'output_data.php';
            }
            ?>
            </div>
            
            </div>
         <!-- /. PAGE INNER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
