<?php
include 'config.php';
$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM siswa WHERE id = ?");
if ($stmt->execute([$id])) {
  echo "<script>alert('Data dihapus!');window.location='index.php';</script>";
} else {
  echo "<script>alert('Gagal menghapus data!');window.location='index.php';</script>";
}
?>
