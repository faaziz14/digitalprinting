<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "eprinting";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}



?>