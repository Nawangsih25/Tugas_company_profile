<?php
    $host="localhost";
    $username="root";
    $password="";
    $db="reservasi_studio";

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$db", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO ::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        die("Koneksi Gagal :" .$e->getMessage());
    }

?>