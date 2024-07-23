<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Tambah Data Baru</h2>
    <form action="proses_tambah.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br>
        <label>Jenis Kelamin:</label><br>
        <select name="jenis" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>
        <label>No Handphone:</label><br>
        <input type="text" name="nohp"><br>
        <label>Tempat dan Tanggal Lahir:</label><br>
        <input type="text" name="ttl"><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>