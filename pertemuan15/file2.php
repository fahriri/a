<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="file3.php">Tambah data</a>
    <?php
    include 'file1.php';
    
    if(isset($_GET['hapus_id'])){
        $hapus_id = $_GET['hapus_id'];

        $query_hapus = "DELETE FROM karyawan WHERE id = '$hapus_id'";
        if (mysqli_query($koneksi, $query_hapus)) {
            echo "Buku berhasil dihapus.";
        } else {
            echo "Error: " . $query_hapus . "<br>" . mysqli_error($koneksi);
        }
    }

    $query = "SELECT * FROM karyawan";
    $result = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
        echo "<tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No Handphone</th>
                <th>Tempat dan Tanggal Lahir</th>
            </tr>";
        while(mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['jk'] . "</td>
                    <td>" . $row['no_hp'] . "</td>
                    <td>" . $row['ttl'] . "</td>
                    </tr>";
        }
            echo "</table>";
    }else{
        echo"tidak tersedia";
    }
    mysqli_close($koneksi);
    ?>
</body>
</html>