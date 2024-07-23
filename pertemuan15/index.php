<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Karyawan</h1>
    
    <a href="tambah_data.php">Tambah Karyawan Baru</a>
    <br><br>
    
    <?php
    include 'koneksi_db.php';

    if (isset($_GET['hapus_id'])) {
        $id_hapus = $_GET['hapus_id'];
        
        $query_hapus = "DELETE FROM karyawan WHERE id = '$id_hapus'";
        
        if (mysqli_query($koneksi, $query_hapus)) {
            echo "Buku berhasil dihapus.";
        } else {
            echo "Error: " . $query_hapus . "<br>" . mysqli_error($koneksi);
        }
    }
    
    $query = "SELECT * FROM karyawan";
    $result = mysqli_query($koneksi, $query);
    
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No Handphone</th>
                <th>Tempat dan Tanggal Lahir</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['jenis'] . "</td>";
            echo "<td>" . $row['nohp'] . "</td>";
            echo "<td>" . $row['ttl'] . "</td>";
            echo "<td><a href='index.php?hapus_id=" . $row['id'] . "'>Hapus</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada buku yang tersedia.";
    }
    
    mysqli_close($koneksi);
    ?>
</body>
</html>