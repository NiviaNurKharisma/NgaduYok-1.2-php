<?php
include '../config/connection.php';
session_start();
 
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($database,"SELECT * FROM masyarakat WHERE username='$username' AND password='$password'");
$data2 = mysqli_query($database,"SELECT * FROM petugas WHERE username='$username' AND password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$cek2 = mysqli_num_rows($data2);

 
if($cek > 0){

	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['level'] = "masyarakat";
	while($row = mysqli_fetch_assoc($data)) {
		$_SESSION['nik']=$row["nik"];
	}
	
	header("location:../masyarakat/index.php");

}
else if($cek2 > 0){
    
    $login = mysqli_fetch_assoc($data2);
 
	// cek jika user login sebagai admin
	if($login['level']=="admin"){
 
		// buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
		$_SESSION['level'] = "admin";
		$_SESSION['id_petugas'] = $login['id_petugas'];
		
		// alihkan ke halaman dashboard admin
		header("location:../admin/index.php");
 
	// cek jika user login sebagai pegawai
	}else if($login['level']=="petugas"){
		// buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
		$_SESSION['level'] = "petugas";
		$_SESSION['id_petugas'] = $login['id_petugas'];
		// alihkan ke halaman dashboard pegawai
        header("location:../petugas/index.php");
    }
 
}
else{
 
	// alihkan ke halaman login kembali
	header("location:login.php?pesan=gagal");
}
?>