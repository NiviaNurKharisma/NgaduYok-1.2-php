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
            <th>ID Pengaduan</th>
            <th>Tanggal</th>
            <th>Tanggapan</th>
            <th>ID Petugas</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
        $sql = "SELECT * FROM tanggapan
        JOIN pengaduan ON tanggapan.id_pengaduan= pengaduan.id_pengaduan
        JOIN petugas ON tanggapan.id_petugas= petugas.id_petugas
        "; //Query SQL
        $result = $database->query($sql); //Execute Query SQL
        $no = 1;
        while($row = $result->fetch_assoc() )//menampilkan bentuk array
            {
                echo "
                <tr>
                <td>".$no."</td>
                <td>".$row["id_pengaduan"]."</td>
                <td>".$row["tgl_tanggapan"]."</td>
                <td>".$row["tanggapan"]."</td>
                <td>".$row["id_petugas"]."</td> 
            </tr>
            "; 
            $no++;   
            
            }
    ?>
    <a href="pdf.php" class="btn btn-danger">PDF</a>
    |
    <a href="excel.php" class="btn btn-success">Excel</a>
    <br><br>
    </tbody>
    
</table>
<br>
<div >
    <a href="index.php" class="btn btn-primary">Kembali</a>
    <br><br><br>
</div>
    