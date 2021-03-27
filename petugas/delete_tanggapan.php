<?php
include ('../config/connection.php');
$id = $_GET["id"];

$sql = "DELETE FROM tanggapan WHERE id_tanggapan='".$id."'";
$result = $database-> query ($sql);
if($result){
      echo"
      <script>
      alert('Data successfully deleted!');
      window.location = 'tabel.php';
      </script>
      ";
}
else{
      echo"
      <scripit>
      alert('Error!');
      window.location = 'tabel.php';
      </script>
      ";
}
?>