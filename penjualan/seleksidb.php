<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("file1.php");
    $database = "db_penjualan";
    // Membuat koneksi
    $conn = mysqli_connect("localhost", "root", "", "db_penjualan");
    // Memeriksa Koneksi
    if(!$conn){
        die("Koneksi gagal:" . mysqli_connect_error());
    }
    // Memilih DB
    $selek_db = mysqli_select_db($conn, $database);
    if(!$selek_db){
        die("Database tidak terdeteksi");
    }
    ?>
</body>
</html>