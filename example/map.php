<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=failed");
	}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>NgaduYok!</title>
  <!-- Favicon -->
  <link rel="icon" href="../../../bootstrap/argon-dashboard-master/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../../bootstrap/argon-dashboard-master/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../../bootstrap/argon-dashboard-master/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../../bootstrap/argon-dashboard-master/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a href= "index.php" class="navbar-brand">
        <img src="../../pengaduan/resources/img/logo1.png" class="navbar-brand-img" alt="">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="../admin/index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="map.php">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="../admin/tabel.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tabel</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../admin/updatepass.php">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Update Password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../admin/regisadm.php">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
          </ul>
        
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-collection"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">Pengaduan<strong class="text-primary">/</strong> Tanggapan</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="../admin/viewngadu.php" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <i class="ni ni-bullet-list-67"></i>
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Pengaduan Masyarakat</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>laporan</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Laporan Masyarakat Kel. Karanganyar</p>
                      </div>
                    </div>
                  </a>
                  <a href="../admin/viewtanggap.php" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <i class="ni ni-bullet-list-67"></i>
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">Tanggapan</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>tanggapan</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Tanggapan</p>
                      </div>
                    </div>
                  </a>
           
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../pengaduan/resources/img/profil.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['username']; ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="../content/logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Google Maps</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="../admin/index.php"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="map.php">Maps</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Google Maps</li>
                </ol>
              </nav>
            </div>
        
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">NgaduYok!</h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap">Kel.Karanganyar</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="card-body">
			<br><br><br>
                <div class="row">
                <h2>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>. </h2>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card border-0">
            <div id="map-default" class="map-canvas" >
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31709.415196321304!2d107.75611891825127!3d-6.56240569623549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e693b7ac92c67ed%3A0x362b1b7e3a86e189!2sKaranganyar%2C%20Kec.%20Subang%2C%20Kabupaten%20Subang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1615861165381!5m2!1sid!2sid" width="1036" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    
     
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2021 <a href="https://www.instagram.com/nivianurkh_/?hl=en" class="font-weight-bold ml-1" target="_blank">nivianurkh</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
                
              </li>
              <li class="nav-item">
               <a href="https://github.com/NiviaNurKharisma/" class="nav-link" target="_blank"><i class="ni ni-single-copy-04 text"></i></a>
              </li>
              
              <li class="nav-item">
              <a href="#" class="nav-link" target="_blank"><i class="ni ni-satisfied text-yellow"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../../bootstrap/argon-dashboard-master/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../../bootstrap/argon-dashboard-master/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../../bootstrap/argon-dashboard-master/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../../bootstrap/argon-dashboard-master/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../../bootstrap/argon-dashboard-master/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../../../bootstrap/argon-dashboard-master/assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../../../bootstrap/argon-dashboard-master/assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../../../bootstrap/argon-dashboard-master/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
