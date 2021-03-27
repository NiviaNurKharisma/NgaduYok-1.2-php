<head>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../assets/css/datatables.min.css"/>


<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/popper.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/js/datatables.min.js"></script>

<script>
   $(document).ready(function() {
    $('#pengaduan').DataTable();
} );
</script>
</head>
<?php
 include ('../config/connection.php'); 

 
 ?>


<div class="container">
 <br><br>
<h1>NgaduYok!</h1>
<h4>Laporan Pengaduan Masyarakat Kel. Karangayar</h4>
<br>


<table id="pengaduan" class="table table-bordered table-striped table-hover">

    <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>NIK</th>
            <th>Laporan</th>
            <th>Bukti</th>
            <th>Lokasi</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT * FROM pengaduan
        -- JOIN jenis ON inven.id_jenis = jenis.id_jenis 
        -- JOIN ruang ON inven.id_ruang = ruang.id_ruang 
        JOIN masyarakat ON pengaduan.nik= masyarakat.nik
        "; //Query SQL
        $result = $database->query($sql); //Execute Query SQL
        $no = 1;
        while($row = $result->fetch_assoc() )//menampilkan bentuk array
            {
             $status = $row['status'];
             if($row["status"] == "0") $status = "belum";
                echo "
                    <tr>
                        <td>".$no."</td>
                        <td>".$row["tgl_pengaduan"]."</td>
                        <td>".$row["nik"]."</td>
                        <td>".$row["isi_laporan"]."</td>
                        <td><img src='".$row["foto"]."' width=80px></td>
                        <td>".$row["lokasi"]."</td>
                        <td>".$status."</td>
                        
                    </tr>
                    "; 
                        $no++;   
            
            }
    ?>
    <a href="exportpdf.php" class="btn btn-danger">PDF</a>
    |
    <a href="exportexcel.php" class="btn btn-success">Excel</a>
    <br><br>
    </tbody>
</table>
<br>
<div >
    <a href="index.php" class="btn btn-primary">Kembali</a>
    <br><br><br>
</div>
