<?php
 include ('../config/connection.php'); 
 ?>
 <div class="container">

 <head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.min.css"/>

    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/popper.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="../assets/js/datatables.min.js"></script>

</head>

<h1>NgaduYok</h1>
<h4>Laporan Pengaduan Masyarakat Kel. Karangayar</h4>

<a href="add_tanggapan.php" class="btn btn-primary">(+) Tambah Tanggapan</a> <br><br>
<table id="pengaduan_table" class="table table-bordered table-striped table-hover">

    <thead>
        <tr>
            <th>No.</th>
            <th>Id Pengaduan</th>
            <th>Tanggal Tanggapan</th>
            <th>Tanggapan</th>
            <th>Id Petugas</th>
            <th width="138px">AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tanggapan
        -- JOIN jenis ON inven.id_jenis = jenis.id_jenis 
        -- JOIN ruang ON inven.id_ruang = ruang.id_ruang 
        JOIN pengaduan ON tanggapan.id_pengaduan= pengaduan.id_pengaduan
        JOIN petugas ON tanggapan.id_petugas= petugas.id_petugas
        "; //Query SQL
        $result = $database->query($sql); //Execute Query SQL
        $no = 1;
        while($row = $result->fetch_assoc() ) //menampilkan bentuk array
        {
            echo "
            <tr>
                <td>".$no."</td>
                <td>".$row["id_pengaduan"]."</td>
                <td>".$row["tgl_tanggapan"]."</td>
                <td>".$row["tanggapan"]."</td>
                <td>".$row["id_petugas"]."</td>
                <td>
                    <a href= 'edit_tanggapan.php?id=".$row["id_tanggapan"].
                    "'class = 'btn btn-success btn-sm'>Edit</a>
                    |
                    <a href= 'delete_tanggapan.php?id=".$row["id_tanggapan"]."'
                    onclick='return confirm (\"Yakin nih mau dihapus???\");'
                    class = 'btn btn-danger btn-sm'>Delete</a>
                </td>
            </tr>
            "; 
            $no++;   

        }
        ?>
     </tbody>
</table>
</div>