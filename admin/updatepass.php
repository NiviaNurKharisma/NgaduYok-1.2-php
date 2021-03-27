<?php

include ('../config/connection.php');
session_start();
$username = $_SESSION['username'];
$sql = "SELECT * FROM petugas WHERE username = '".$username."';";
$result = mysqli_query($database,$sql);

$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);

 $submit = isset($_POST['petugas_submit'])?$_POST["petugas_submit"]:"";
	if ($submit) {
		
		$password = $_POST["password"];

	 	$sql ="
	 	   UPDATE petugas SET 
	 	    password = '".$password."'
	 	   WHERE username = '". $username ."'
	 	   ;";
	 	$result = $database->query($sql);
	 	if($result){
	 		echo "
	 		<script>
	 			alert('Password Berhasil Diubah!');
	 			window.location = '../content/login.php';
	 		</script>
	 		";
	 	}
	 	else{
	 		echo $sql;
	 		 echo "
	 		 <script>
	 			alert('Terjadi Kesalahan, Silahkan Ulangi Lagi!');
                 window.location = 'updatepass.php'
	 		</script>
	 		 ";
	 	}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>NgaduYok!</title>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Potta+One&family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../masyarakat/stylemasyarakat.css">
    <link rel="stylesheet" type="text/css" href="../../pengaduan/vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="../../pengaduan/vendors/css/normalize.css">
</head>


<body>
<div class="row">
    <h1>NgaduYok!</h1>
    <h3>Laporan Kerusakan Lingkungan</h3>
</div>


<div class= "row">
    <div class= "kotak_ngadu">
        <div class="row">
            <form action="" method="POST" class="contact-form">

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Password</label>
                    </div>
                    <div class="col span-2-of-3">
                    <input type="text" name="password" class="form_ngadu" placeholder="Silahkan isi rahasia kamu di sini..."></input>
                    </div>
                </div>
                <br><br> 
                                
                <input type="submit" name="petugas_submit" value="Simpan" class = 'tombol_login'/>
              

            </form>
        </div>
</div>

</body>
</html>
