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
    include("koneksidb.php");
    include("seleksidb.php");
    // koneksi db
    $conn = mysqli_connect("localhost", "root", "", "db_penjualan");
    // memeriksa koneksi
    if(!$conn){
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    $seleksi = "SELECT*FROM tb_buku";
    $hasil_seleksi = mysqli_query($conn, $seleksi);
    if(!$hasil_seleksi){
        echo"Proses penyelesaian tabel buku gagal !!";
    }else {
        while ($baris = mysqli_fetch_array($hasil_seleksi)){
            echo"ID BUKU : " . $baris['id_buku'] . "<br>";
            echo"Judul Buku : " . $baris['judul'] . "<br>";
            echo"Halaman : " . $baris['hal'] . "<br><br>";
        }
    }
    // menutup koneksi
    mysqli_close($conn)
    ?>
</body>
</html>