<?php
date_default_timezone_set("Asia/Jakarta");
// $koneksi = mysqli_connect("localhost", "root", "", "perpusdb");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ruang_baca";

$koneksi = new mysqli($servername, $username, $password, $dbname);
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}