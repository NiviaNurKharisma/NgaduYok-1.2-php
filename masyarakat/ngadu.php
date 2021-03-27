<?php
include ('../config/connection.php');
session_start();

$submit = isset($_POST["ngadu_submit"])?$_POST["ngadu_submit"]:"";
if($submit){
    $path = $_FILES["foto"]["tmp_name"];
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

    $sql = "
        INSERT INTO pengaduan VALUES(
            NULL,
            NOW(),
            '".$_SESSION["nik"]."',
            '".$_POST["isi_laporan"]."',
            '".$base64."',
            '".$_POST["lokasi"]."',
            '0'
        );
    ";
    $result = $database->query($sql); // Execute Query SQL
    
    if($result){
        // echo "
        //     <script>
        //         alert('Laporan Berhasil Di Kirimkan! Termakasih ^-^');
        //         window.location = 'ngadu.php';
        //     </script>
        // ";
    }else{
        echo "
            <script>
                alert('Terjadi Kesalahan !');
                window.location = 'ngadu.php';
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
	<link rel="stylesheet" href="stylemasyarakat.css">
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
            <form action="" method="POST" enctype="multipart/form-data" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>NIK</label>
                    </div>
                    <div class="col span-2-of-3">
                        <td>
                        <?php echo $_SESSION['nik']; ?>
                        </td>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Laporan</label>
                    </div>
                    <div class="col span-2-of-3">
                    <textarea name="isi_laporan" class="form_ngadu" placeholder="Silahkan isi laporannya di sini..."></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Lokasi</label>
                    </div>
                    <div class="col span-2-of-3">
                    <textarea name="lokasi" class="form_ngadu" placeholder="Silahkan isi laporannya di sini..."></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class= "col span-1-of-3">
                        <label>Bukti</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="file" name="foto" class="form_ngadu">
                    </div>
                </div>
                
            
                </div>
                <br><br> 
                                
                <input type="submit" name="ngadu_submit" value="Simpan" class = 'tombol_login'/>
                <a href="../content/login.php">Ingin tau apakah sudah di verifikasi?</a>

            </form>
        </div>
</div>

</body>
</html>
