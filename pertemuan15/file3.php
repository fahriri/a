<?php

include ('koneksi_db.php');

$judul = $_POST['nama'];
$penulis = $_POST['jenis'];
$harga = $_POST['nohp'];

$query = "INSET INTO karyawan (nama, jenis, nohp) VALUES ('$judul', '$penulis', '$harga')";

if(mysqli_query($koneksi, $query)) {
    header('Location: index.php');
    exit;

}else{
    echo "eror : " . $query . "<br>" . mysqli_error($koneksi);
}