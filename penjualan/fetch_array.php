<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Kode Buku</th>
            <th>Judul Buku</th>
            <th>Halaman</th>
        </tr>

    <?php
        include("koneksidb.php");
        include("seleksidb.php");

        $koneksi = mysqli_connect("localhost", "root", "", "db_penjualan");

        if(!$koneksi){
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        $seleksi = "SELECT * FROM tb_buku WHERE id_buku = 2";
        $hasil_seleksi = mysqli_query($koneksi, $seleksi);
        if(!$hasil_seleksi){
            echo "Proses penyelesaian tabel buku gagal !!";
        } else {
            echo "Data buku dengan ID 2: <br><br>";
            while ($baris = mysqli_fetch_array($hasil_seleksi)){
                echo "<tr>
                <td>{$baris['id_buku']}</td>
                <td>{$baris['judul']}</td>
                <td>{$baris['hal']}</td>
                </tr>";
            }
        }
        ?>

    </table>

    <?php
        $seleksi1 = "SELECT * FROM tb_buku WHERE judul = '12 Proyek unik Visual basic 6'";
        $hasil_seleksi1 = mysqli_query($koneksi, $seleksi1);

        if (!$hasil_seleksi1) {
            echo "Proses pemilihan buku 1 gagal !!";
        } else {
            echo "<br>Data Buku dengan judul '12 Proyek unik Visual basic 6': <br><br>";
            echo "<table border='1'>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Jumlah Halaman</th>
                    </tr>";
            while ($baris1 = mysqli_fetch_array($hasil_seleksi1)) {
                echo "<tr>
                        <td>{$baris1['id_buku']}</td>
                        <td>{$baris1['judul']}</td>
                        <td>{$baris1['hal']}</td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>
        
    <?php
        $seleksi1 = "SELECT * FROM tb_buku WHERE judul LIKE '%Visual Basic%'";
        $hasil_seleksi1 = mysqli_query($koneksi, $seleksi1);

        if (!$hasil_seleksi1) {
            echo "Proses pemilihan buku 1 gagal !!";
        } else {
            echo "<br> judul yang mengandung kata 'Visual basic' : <br><br>";
            echo "<table border='1'>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Jumlah Halaman</th>
                    </tr>";
            while ($baris1 = mysqli_fetch_array($hasil_seleksi1)) {
                echo "<tr>
                        <td>{$baris1['id_buku']}</td>
                        <td>{$baris1['judul']}</td>
                        <td>{$baris1['hal']}</td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>

    <?php
        $seleksi1 = "SELECT * FROM tb_buku WHERE id_buku < 3";
        $hasil_seleksi1 = mysqli_query($koneksi, $seleksi1);

        if (!$hasil_seleksi1) {
            echo "Proses pemilihan buku 1 gagal !!";
        } else {
            echo "<br>buku dengan id_buku kurang dari 3 : <br><br>";
            echo "<table border='1'>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Jumlah Halaman</th>
                    </tr>";
            while ($baris1 = mysqli_fetch_array($hasil_seleksi1)) {
                echo "<tr>
                        <td>{$baris1['id_buku']}</td>
                        <td>{$baris1['judul']}</td>
                        <td>{$baris1['hal']}</td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>

    <?php
        $seleksi1 = "SELECT * FROM tb_buku ORDER BY hal DESC";
        $hasil_seleksi1 = mysqli_query($koneksi, $seleksi1);

        if (!$hasil_seleksi1) {
            echo "Proses pemilihan buku 1 gagal !!";
        } else {
            echo "<br>mengurutkan berdasarkan jumlah halaman secara menurun: <br><br>";
            echo "<table border='1'>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Jumlah Halaman</th>
                    </tr>";
            while ($baris1 = mysqli_fetch_array($hasil_seleksi1)) {
                echo "<tr>
                        <td>{$baris1['id_buku']}</td>
                        <td>{$baris1['judul']}</td>
                        <td>{$baris1['hal']}</td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>

    <?php
        $seleksi1 = "SELECT * FROM tb_buku WHERE judul LIKE 'M%'";
        $hasil_seleksi1 = mysqli_query($koneksi, $seleksi1);

        if (!$hasil_seleksi1) {
            echo "Proses pemilihan buku 1 gagal !!";
        } else {
            echo "<br>judul buku yang dimulai dengan huruf M: <br><br>";
            echo "<table border='1'>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Jumlah Halaman</th>
                    </tr>";
            while ($baris1 = mysqli_fetch_array($hasil_seleksi1)) {
                echo "<tr>
                        <td>{$baris1['id_buku']}</td>
                        <td>{$baris1['judul']}</td>
                        <td>{$baris1['hal']}</td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>

    <?php
        $seleksi1 = "SELECT * FROM tb_buku WHERE hal > 300";
        $hasil_seleksi1 = mysqli_query($koneksi, $seleksi1);

        if (!$hasil_seleksi1) {
            echo "Proses pemilihan buku 1 gagal !!";
        } else {
            echo "<br>buku dengan halaman lebih dari 300: <br><br>";
            echo "<table border='1'>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Jumlah Halaman</th>
                    </tr>";
            while ($baris1 = mysqli_fetch_array($hasil_seleksi1)) {
                echo "<tr>
                        <td>{$baris1['id_buku']}</td>
                        <td>{$baris1['judul']}</td>
                        <td>{$baris1['hal']}</td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>

    <?php
        $seleksi1 = "SELECT * FROM tb_buku WHERE hal < 300";
        $hasil_seleksi1 = mysqli_query($koneksi, $seleksi1);

        if (!$hasil_seleksi1) {
            echo "Proses pemilihan buku 1 gagal !!";
        } else {
            echo "<br>buku dengan halaman kurang dari 300: <br><br>";
            echo "<table border='1'>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Jumlah Halaman</th>
                    </tr>";
            while ($baris1 = mysqli_fetch_array($hasil_seleksi1)) {
                echo "<tr>
                        <td>{$baris1['id_buku']}</td>
                        <td>{$baris1['judul']}</td>
                        <td>{$baris1['hal']}</td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>

    <?php
        $seleksi1 = "SELECT * FROM tb_buku WHERE id_buku > 3";
        $hasil_seleksi1 = mysqli_query($koneksi, $seleksi1);

        if (!$hasil_seleksi1) {
            echo "Proses pemilihan buku 1 gagal !!";
        } else {
            echo "<br>buku dengan id_buku lebih dari 3: <br><br>";
            echo "<table border='1'>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Jumlah Halaman</th>
                    </tr>";
            while ($baris1 = mysqli_fetch_array($hasil_seleksi1)) {
                echo "<tr>
                        <td>{$baris1['id_buku']}</td>
                        <td>{$baris1['judul']}</td>
                        <td>{$baris1['hal']}</td>
                    </tr>";
            }
            echo "</table>";
        }
        ?>
    <?php
        $seleksi1 = "SELECT * FROM tb_buku ORDER BY LENGTH(judul) DESC LIMIT 1";
        $hasil_seleksi1 = mysqli_query($koneksi, $seleksi1);

        if (!$hasil_seleksi1) {
            echo "Proses pemilihan buku 1 gagal !!";
        } else {
            echo "<br>buku dengan judul terpanjang: <br><br>";
            echo "<table border='1'>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Jumlah Halaman</th>
                    </tr>";
            while ($baris1 = mysqli_fetch_array($hasil_seleksi1)) {
                echo "<tr>
                        <td>{$baris1['id_buku']}</td>
                        <td>{$baris1['judul']}</td>
                        <td>{$baris1['hal']}</td>
                    </tr>";
            }
            echo "</table>";
        }
        mysqli_close($koneksi);
?>
</body>
</html>
