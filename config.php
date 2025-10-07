<?php
$host = "127.0.0.1";
$user = "root"; // ganti kalau pakai user lain
$pass = "";
$db   = "db_siswa";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>