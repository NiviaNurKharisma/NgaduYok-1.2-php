<?php
include ('../config/connection.php');

if(isset($_POST["register_submit"])){
    $sql = "
        INSERT INTO masyarakat  VALUES(
            '".$_POST["nik"]."',
            '".$_POST["nama"]."',
            '".$_POST["username"]."',
            '".$_POST["password"]."',
            '".$_POST["telp"]."',
            '".$_POST["email"]."'
        );
    ";
    $result = $database->query($sql); // Execute Query SQL
    
    if($result){
        echo "
            <script>
                alert('Akun anda berhasil dibuat !');
                window.location = '../content/login.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert(' Terjadi kesalahan, NIK atau USERNAME sudah ada yang menggunakan !');
                window.location = 'register.php'
            </script>
        ";
    }
        
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Auth</title>
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Potta+One&family=Source+Sans+Pro&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styleregismasy.css">
    <link rel="stylesheet" type="text/css" href="../../pengaduan/vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="../../pengaduan/vendors/css/normalize.css">
</head>
    <body>
        <div class="row">
            <h2>Hallo, Orang Baik ! ^-^</h2>
        </div>
        
        <div class= "row">
            <div class= "kotak_ngadu">
                <div class="row">
                    <form name ="MyForm" action="" method="POST" class="contact-form">

                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>NIK</label>
                            </div>
                            <div class="col span-2-of-3">
                            <input onkeypress="return hanyaAngka(event)" type="text" name="nik" class="form_ngadu" maxlength = "16" placeholder="NIK..." required="required">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Nama</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input onkeypress="return event.charCode<48 || event.charCode >57" type="text" name="nama" class= "form_ngadu" placeholder="Input Nama Di Sini...">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>No Hp</label>
                            </div>
                            <div class="col span-2-of-3">
                            <input onkeypress="return hanyaAngka(event)" type="text" name="telp" class="form_ngadu" maxlength = "13" placeholder="08xx ..." required="required">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>E-Mail</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text" name="email" class= "form_ngadu" placeholder="Email Kamu...">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>Username</label>
                            </div>
                            <div class="col span-2-of-3">
                            <Input name="username" class="form_ngadu" placeholder="Username..." onclick="checkName()"></input>
                            <small id="usernameHelp" class="form-text text-muted">Tanpa Spasi.</small>
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
                                        
                        <input type="submit" name="register_submit" value="Simpan" class = 'tombol_login'/>
                        <a href="../../pengaduan/index.html" class = "btn btn2">Kembali!</a>

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
<script>
    function checkName(){
        var x = document.myForm;
        var input = x.name.value;
        var errMsgHolder = document.getElementById('nameErrMsg');
        if (input.length < 3){
            alert ("panjang huruf kurang dari 3");
            return false;
        }else if(!(/^\S{3,}$/.test(input))){
            alert("Tidak boleh ada spasi");
            return false;
        }else{
            alert("Berhasil!");
            return undefined;
        }
    }
</script>