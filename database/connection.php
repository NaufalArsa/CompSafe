<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "compsafe_db";

$connection = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>