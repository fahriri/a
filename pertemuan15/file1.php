<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $database = "db";

    $koneksi = mysqli_connect ($host, $username, $pass, $database);
    
    if(!$koneksi){
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    ?>