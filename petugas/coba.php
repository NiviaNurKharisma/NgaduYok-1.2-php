<?php
include ('../config/connection.php');
session_start();

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
                 window.location = 'selengapnya.php';
             </script>
        ";
    }else{
        echo "
            <script>
                alert('Terjadi Kesalahan !.$sql');
                
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
            <form action="" method="POST"  class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                      
                    </div>
                    <div class="col span-2-of-3">
                        <td>
                        <input type="text" value="<?php echo $_GET['id']?>" name="id_pengaduan"hidden/>
                        </td>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Tanggapan</label>
                    </div>
                    <div class="col span-2-of-3">
                    <textarea name="tanggapan" class="form_ngadu" placeholder="Silahkan isi laporannya di sini..."></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                     
                    </div>
                    <div class="col span-2-of-3">
                        <td>
                        <input type="text" value="<?php echo $_SESSION['id_petugas']?>" name="id_petugas"hidden/>
                        </td>
                    </div>
                </div>

            
                </div>
                <br><br> 
                                
                <input type="submit" name="tanggap_submit" value="Simpan" class = 'tombol_login'/>
                <a href="../content/selengapnya.php">Ingin tau apakah sudah di verifikasi?</a>

            </form>
        </div>
</div>

</body>
</html>
