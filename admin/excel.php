<html>
<head>
	<title>Tanggapan NgaduYok!</title>
</head>
<body>
 
	<center>
 
		<h2>NgaduYok!</h2>
		<h4>Masyarakat Kelurahan Karanganyar</h4>
 
	</center>
 
	<?php 
	include ('../config/connection.php');
	?>
 
	<table border="1" style="width: 100%">
		<tr>
        <th>No.</th>
        <th>ID Pengaduan</th>
        <th>Tanggal</th>
        <th>Tanggapan</th>
        <th>ID Petugas</th>
		</tr>
		<?php 
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=NgaduYok!.xls");
		$no = 1;
		$sql = ("SELECT * FROM tanggapan");
        $result = $database->query($sql);
        while($row = $result->fetch_assoc() )
            { echo "
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
		
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>