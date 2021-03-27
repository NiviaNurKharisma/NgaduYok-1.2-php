<?php
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status']!="login"){
	header("location:../content/login.php?pesan=belum_login");
	exit;
}
?>