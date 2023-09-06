<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "db_rental_mobil_new";
    $mysqli = new mysqli($server, $user, $pass, $database);
    if (!$mysqli) {
        die("<script>alert('Connection Failed.')</script>");
    }
?>