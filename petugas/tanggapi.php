<?php 
 include ('../config/connection.php'); 

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
  <!-- Sidenav -->
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
              <a class="nav-link " href="index.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="examples/map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link active" href="tabel.php">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tabel</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="updatepass.php">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Edit Password</span>
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
           
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../pengaduan/resources/img/profil2.jpg">
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
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(../../pengaduan/resources/img/bg3.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hallo <?php echo $_SESSION['username'];?></h1>
            <p class="text-white mt-0 mb-5">Silahkan menanggapi laporan yang diajukan masyarakat, demi kenyamanan bersama :))</p>
            <a href="#tanggapi" class="btn btn-neutral">Tanggapi!</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="../../pengaduan/resources/img/bg2.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="../../pengaduan/resources/img/profil2.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div>
                      <span class="heading">28</span>
                      <span class="description">Friends</span>
                    </div>
                    <div>
                      <span class="heading">82</span>
                      <span class="description">Photos</span>
                    </div>
                    <div>
                      <span class="heading">282</span>
                      <span class="description">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h5 class="h3">
                <?php echo $_SESSION['username']; ?><span class="font-weight-light"></span>
                </h5>
                
              </div>
            </div>
          </div>
        </div>
        <div id="tanggapi"></div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Tanggapan</h3>
                </div>
                <div class="col-4 text-right">
                 
                </div>
              </div>
            </div>
            <div class="card-body">

            <?php
               $submit = isset($_POST["tanggap_submit"]);
               if($submit){
                   $sql = "
                       INSERT INTO tanggapan VALUES(
                           NULL,
                           '".$_GET["id"]."',
                           NOW(),
                           '".$_POST["tanggapan"]."',
                           '".$_SESSION["id_petugas"]."' 
                       );
                   ";
                   echo $sql;
                   $result = $database->query($sql); // Execute Query SQL
                   
                   if($result){
                       echo "
                            <script>
                                alert('Laporan Berhasil Di Kirimkan! Termakasih ^-^');
                                window.location = 'index.php';
                            </script>
                       ";
                   }else{
                       echo "
                           <script>
                               alert('Terjadi Kesalahan !.');
                               window.location = 'tanggapi.php';
                           </script>
                       ";
                   }
                       
               }
               
               ?>
              <form action=""  method="POST" class="contact-form" >
                <h6 class="heading-small text-muted mb-4">Tanggapi Pengaduan</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">ID Pengaduan</label>
                        <td>
                        <input type="text" value="<?php echo $_GET['id']?>" name="id_pengaduan" class="form-control"/>
                        </td>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">ID Petugas</label>
                        <td>
                        <input type="text" value="<?php echo $_SESSION['id_petugas']?>" name="id_petugas" class="form-control"/>
                        </td>
                      </div>
                    </div>
                    <div class="col-lg-6">
                    
    
                      
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->

                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Tanggapan</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Tanggapan</label>
                    <textarea name="tanggapan" rows="4" class="form-control" placeholder="....."></textarea>
                  </div>
                </div>

                <input type="submit" name="tanggap_submit" value="Kirim" class="btn btn-sm btn-primary"/>
               
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- Page content -->
    
     
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
