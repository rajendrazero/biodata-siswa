<?php

$db   = "db_siswa";
$host = "maglev.proxy.rlwy.net";
$port = 35682; // port sebagai integer, bukan string
$user = "root";
$pass = "RQDnCUbLBvpLHlbgfDDGuORKVjFOznhB";

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

?>
