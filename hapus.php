<?php
include 'config.php';
$id = $_GET['id'];
$conn->query("DELETE FROM siswa WHERE id=$id");
echo "<script>alert('Data dihapus!');window.location='index.php';</script>";
?>