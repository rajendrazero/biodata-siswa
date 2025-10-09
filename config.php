<?php
// Koneksi ke database Supabase PostgreSQL
$host     = "aws-1-ap-southeast-1.pooler.supabase.com";
$port     = "6543";
$dbname   = "postgres";
$user     = "postgres.dlcyjvspmnzxdryumqgk";
$password = "rajendraathallahfawwaz";

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi berhasil";
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
