<?php
include ('../config/connection.php');

$submit = isset($_POST["tanggapan_submit"])?$_POST["tanggapan_submit"]:"";
if($submit){
    $sql = "
        INSERT INTO tanggapan VALUES(
            NULL,
            '".$_POST["id_pengaduan"]."',
            NOW(),
            '".$_POST["tanggapan"]."',
            '".$_POST["foto"]."',
            '".$_POST["id_petugas"]."'
        );
    ";
    $result = $database->query($sql); // Execute Query SQL
    
    if($result){
        echo "
            <script>
                alert('Tanggapan berhasil ditambahkan!');
                window.location = 'tanggapan.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Terjadi Kesalahan, Coba Ulangi Lagi!');
                window.location = 'tanggapan.php';
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
                        <label>Id Pengaduan</label>
                    </div>
                    <div class="col span-2-of-3">
                        <td>
                            <select name="id_pengaduan" class="form_ngadu">
                                <?php 
                                    $sql="SELECT * FROM pengaduan";
                                    $result=$database->query($sql);
                                    while($row=$result->fetch_assoc())
                                    {
                                    echo "<option value='$row[id_pengaduan]'> $row[nik] </option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Tanggapan</label>
                    </div>
                    <div class="col span-2-of-3">
                    <textarea name="tanggapan" class="form_ngadu" placeholder="Silahkan isi tanggapan anda di sini..."></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Id Petugas</label>
                    </div>
                    <div class="col span-2-of-3">
                        <td>
                            <select name="id_petugas" class="form_ngadu">
                                <?php 
                                    $sql="SELECT * FROM petugas";
                                    $result=$database->query($sql);
                                    while($row=$result->fetch_assoc())
                                    {
                                    echo "<option value='$row[id_petugas]'> $row[nama] </option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </div>
                </div>

                <br><br> 
                                
                <input type="submit" name="ngadu_submit" value="Simpan" class = 'tombol_login'/>
                

            </form>
        </div>
</div>

</body>
</html>
