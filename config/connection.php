<?php
$database = new mysqli("localhost","root","","pengaduan_masyarakat");
if (mysqli_connect_errno()) {
    echo "Error : " . mysqli_connect_error();
}
?>