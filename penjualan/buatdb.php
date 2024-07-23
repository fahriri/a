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

    $tabel = "CREATE TABLE tb_buku (
        id_buku int not null primary key auto_increment,
        judul varchar(200) not null,
        hal int not null)";
    // qury untuk mengisi data kedalam tabel
    $isi = "INSERT INTO tb_buku (id_buku, judul, hal) VALUES
        (1, '7JBI Visual Basic 6', 200),
        (2, 'SQL Server dgn Visual Basic 6', 200),
        (3, 'Macro Excel 2003', 200),
        (4, '12 Proyek unik Visual basic 6', 200)";
        
    // eksekusi query untuk membuat tabel 
    $buat_tabel = mysqli_query($conn, $tabel);
    if(!$buat_tabel){
        echo "Proses pembuatan tabel buku gagal !!";
    }
    else {
        // jika tabel berhasil dibuat, eksekusi query untuk mengisi data
        $isi_tabel = mysqli_query($conn, $isi);
        if(!$isi_tabel){
            echo"Pengisian data gagal";
        }else {
            echo"Proses pembuatan tabel buku dan pengisian data berhasil";
        }

    }
    ?>
</body>
</html>