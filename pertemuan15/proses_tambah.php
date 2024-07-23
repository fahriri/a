<?php
include 'koneksi_db.php';

$judul = $_POST['nama'];
$penulis = $_POST['jenis'];
$harga = $_POST['nohp'];
$stok = $_POST['ttl'];

$query = "INSERT INTO karyawan (nama, jenis, nohp, ttl) VALUES 
        ('$judul', '$penulis', '$harga', '$stok')";

if (mysqli_query($koneksi, $query)) {
    header('Location: index.php');
    exit;
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
