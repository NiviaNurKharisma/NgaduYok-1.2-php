<?php
include ('../config/connection.php');

if(isset($_POST["registeradm_submit"])){

    
    // $data = mysqli_query($database,"SELECT username FROM masyarakat WHERE username='$username'");
    // $data2 = mysqli_query($database,"SELECT username FROM petugas WHERE username='$username'");
    // if(mysqli_fetch_assoc($data)&&($data2)){
    //     echo '<div class="alert alert-warning mt-3 container col-md-4" role="alert">
    //     Username sudah terpakai, Silhakan ulangi lagi! </div>';
    //     return false;
    // }

    $sql = "
        INSERT INTO petugas  VALUES(
            NULL,
            '".$_POST["nama_petugas"]."',
            '".$_POST["username"]."',
            '".$_POST["password"]."',
            '".$_POST["telp"]."',
            '".$_POST["status"]."'
        );
    ";
    $result = $database->query($sql); // Execute Query SQL
    
    if($result){
        echo "
            <script>
                alert('Akun anda berhasil dibuat ! ');
                window.location = 'index.php'
               
            </script>
        ";
    }else{
        echo "
            <script>
                alert(' Terjadi kesalahan !');
                window.location = 'regisadm.php'
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
	<link rel="stylesheet" href="styleadm.css">
    <link rel="stylesheet" type="text/css" href="../../pengaduan/vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="../../pengaduan/vendors/css/normalize.css">
</head>


<body>
<div class="row">
    <h1>NgaduYok</h1>
    <h3>Hallo Admin. Silahkan Lakukan Registrasi!</h3>
</div>


<div class= "row">
    <div class= "kotak_ngadu">
        <div class="row">
            <form action="" method="POST" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Nama</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="nama_petugas" class= "form_ngadu" placeholder="Input Nama Di Sini...">
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>No Hp</label>
                    </div>
                    <div class="col span-2-of-3">
                    <input onkeypress="return hanyaAngka(event)" type="text" name="telp" class="form_ngadu" placeholder="08xx ..." required="required">
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Username</label>
                    </div>
                    <div class="col span-2-of-3">
                    <Input  name="username" class="form_ngadu" placeholder="Username..."></input>
                    </div>
                </div>

                <div class = "row">
                    <div class= "col span-1-of-3">
                        <label>Level</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="status" class="form_ngadu">
                        <option value="">Status</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class= "col span-1-of-3">
                        <label>Password</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="password" name="password" class="form_ngadu" placeholder="Rahasia Kamu Aman Di Sini...">
                    </div>
                </div>

                <br><br> 
                                
                <input type="submit" name="registeradm_submit" value="Simpan" class = 'tombol_login'/>
                

            </form>
        </div>
</div>

</body>
</html>

<script>
      function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
</script>