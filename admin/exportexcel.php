<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<title>NgaduYok!</title>
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
        <th>tanggal</th>
        <th>NIK</th>
        <th>Laporan</th>
        <th>Lokasi</th>
        <th>Bukti</th>
        <th>Status</th>
		</tr>
		<?php 
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=NgaduYok!.xls");
		$no = 1;
		$sql = ("SELECT * FROM pengaduan");
        $result = $database->query($sql);
        while($row = $result->fetch_assoc() )
            {
                $status = $row['status'];
                if($row["status"] == "0") $status = "belum";
                  echo "
                  <tr>
                      <td>".$no."</td>
                      <td>".$row["tgl_pengaduan"]."</td>
                      <td>".$row["nik"]."</td>
                      <td>".$row["isi_laporan"]."</td>
                      <td>".$row["lokasi"]."</td>
                      <td><img src='".$row["foto"]."' width=80px></td>
                      <td>".$status."</td>
                      
                  </td>
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