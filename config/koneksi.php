<head>
<title>Pengaduan</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">

<script src="./assets/js/jquery-3.3.1.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.dataTables.min.js"></script>
<script src="./assets/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function(){
        $('#pengaduan_masyarakat').DataTable();
    });
</script>
</head>
<?php
//Membuat koneksi ke database
//mysqli (source, username, password,nama db)

$db = new mysqli("localhost","root","","pengaduan_masyarakat");
if (mysqli_connect_errno()) {
    echo "Error :" . mysqli_connect_error();
}
else{
    //echo 'Success;
}
?>