<?php 
    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "dblogin";

    $koneksi = mysqli_connect($host, $user, $password, $database);

    if (!$koneksi) {
        echo "Connection failed!";
    }
?>