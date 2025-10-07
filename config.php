<?php

$db   = "db_siswa";
$host = "maglev.proxy.rlwy.net";
$port = "35682"; // ganti sesuai port Railway DB-mu
$user = "root";
$pass = "RQDnCUbLBvpLHlbgfDDGuORKVjFOznhB";

$conn = new mysqli($host, $port, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
