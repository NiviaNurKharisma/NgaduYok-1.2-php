<?php 


if(isset($_GET['pesan'])) {
    if($_GET['pesan']=="gagal") {
        echo '<script>alert("Login gagal!, username atau password salah!")</script>';
    } 

    else if($_GET['pesan']=="logout") {
        echo '<script>alert("Anda Berhasil Logout!")</script>';
    }

    else if($_GET['pesan']=="belum_login") {
        echo '<script>alert("Anda Belum Login!")</script>';
    }
}
 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Auth</title>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Potta+One&family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="../../pengaduan/vendors/css/ionicons.min.css">
</head>


<body>
<div row>
		<h2>Hello good people!</h2>
	</div>
<div class="kotak_login">
		<p class="tulisan_login"><i class= "ion-locked icon-big"></i></p>
 
		<form action="proses_login.php" method="post">
			<label><i class="ion-ios-person-outline icon-small"></i></label>
			<input type="text" name="username" class="form_login" placeholder="Masukan username kamu .." required="required">
			<br><br>
			<label><i class="ion-ios-locked-outline icon-small"></i></label>
			<input type="password" name="password" class="form_login" placeholder="Sssttt .." required="required">
			 <br><br><br>
			
			 <input type="submit" name= "submit_login" class="tombol_login" value="Login!">
				<a href="../../pengaduan/index.html" class = "btn btn2">Back</a>
			<h6><a href="../masyarakat/register.php" class ="button">Belum punya akun?</a></h6>
		</form>

</div>
</body>
</html>

    