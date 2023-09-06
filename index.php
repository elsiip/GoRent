<?php 
    include 'koneksi.php';
    session_start();

    if (!isset($_SESSION['name'])) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Go Rent</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-60">
                <i class='fas fa-car-side' style='font-size:48px;color:white'></i>
                </div>
                <div class="sidebar-brand-text mx-3">GO RENT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="mobil.php">
                    <i class='fas fa-car-side'></i>
                    <span>Data Mobil</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pemesan.php">
                    <i class="fas fa-user"></i>
                    <span>Data Pemesan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="perjalanan.php">
                    <i class="fas fa-road"></i>
                    <span>Data Perjalanan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pesanan.php">
                    <i class="fas fa-receipt" ></i>
                    <span>Data Pesanan</span></a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Pengaturan
            </div>

            <li class="nav-item">
                <a class="nav-link" href="akun.php">
                <i class="fas fa-fw fa-cog"></i>
                    <span>Data Akun</span></a>
            </li>

            <!-- Divider -->
            
        </ul>
        <!-- End of Sidebar -->


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in">
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>

                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['name'] ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="logout.php" onclick="return confirm('apakah anda yakin?')">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                    </div>
                                </li>
                            </ul>
                    </ul>

                </nav>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <hr>
        
                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Mobil</div>
                                            <?php
                                                include 'koneksi.php';
                                                $data_mobil = mysqli_query($mysqli, "SELECT*FROM tbl_mobil");
                                                $jumlah_mobil = mysqli_num_rows($data_mobil);
                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_mobil; ?> Mobil</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class='fas fa-car-side fa-2x text-gray-300'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Pemesan</div>
                                            <?php
                                                include 'koneksi.php';
                                                $data_pemesan = mysqli_query($mysqli, "SELECT*FROM tbl_pemesan");
                                                $jumlah_pemesan = mysqli_num_rows($data_pemesan);
                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_pemesan; ?> Orang</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pesanan</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                <?php
                                                include 'koneksi.php';
                                                $data_pesanan = mysqli_query($mysqli, "SELECT*FROM tbl_pesanan");
                                                $jumlah_pesanan = mysqli_num_rows($data_pesanan);
                                                ?>
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $jumlah_pesanan; ?> Pesanan</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-receipt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Data Akun</div>
                                            <?php
                                                include 'koneksi.php';
                                                $data_akun = mysqli_query($mysqli, "SELECT*FROM users");
                                                $jumlah_akun = mysqli_num_rows($data_akun);
                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jumlah_akun; ?> Akun</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                    </div>

                    

                    <div class="row">
                        <div class="col-sm-6">

                        </div>
                    </div>

				</div><!-- End container-fluid --> 
                
            </div><!-- End content -->
            
            <!-- Footer --> 
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><a>Elsi - Ereen - Winda </a>&copy; Go Rent 2022</span>
                    </div>
                </div>
            </footer>

        </div><!-- End content-wrapper --> 

    </div><!-- End wrapper -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>
                
    
