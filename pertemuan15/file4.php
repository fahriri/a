<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file3.php"method="POST">
    <label>Nama :</label>
    <input type="text" name="nama"><br>
    <label>Jenis Kelamin :</label>
    <input type="text" name="jenis"><br>
    <input type="submit" name="submit" value="kirim">
    <select name="ttl" required>
    <option value="laki-laki">Laki-laki</option>
    <option value="perempuan">Perempuan</option>
    </select>
    </form>
</body>
</html>