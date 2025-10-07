<?php
include "config.php";

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Data_Siswa_2025_2026.xls");

echo "<table border='1'>";
echo "<tr><th colspan='17' style='text-align:center; font-size:16px;'>DATA SISWA</th></tr>";
echo "<tr><th colspan='17' style='text-align:center;'>SMK NEGERI 9 MEDAN</th></tr>";
echo "<tr><th colspan='17' style='text-align:center;'>TAHUN AJARAN 2025/2026</th></tr>";
echo "<tr></tr>";

echo "<tr style='background:#FFD700; font-weight:bold; text-align:center;'>";
echo "
<th>No</th>
<th>Nama Siswa</th>
<th>NIS</th>
<th>NISN</th>
<th>L/P</th>
<th>TTL</th>
<th>Agama</th>
<th>Nama Ortu</th>
<th>Pekerjaan</th>
<th>Alamat</th>
<th>Telp Ortu</th>
<th>Telp Siswa</th>
<th>Bakat & Minat</th>
<th>Cita-cita</th>
<th>Mapel Disukai</th>
<th>Bahasa</th>
<th>Rencana Setelah Lulus</th>
";
echo "</tr>";

$result = $conn->query("SELECT * FROM siswa ORDER BY no_urut ASC");
$no = 1;
while ($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td>$no</td>";
  echo "<td>{$row['nama_siswa']}</td>";
  echo "<td>{$row['nis']}</td>";
  echo "<td>{$row['nisn']}</td>";
  echo "<td>{$row['jenis_kelamin']}</td>";
  echo "<td>{$row['tempat_tanggal_lahir']}</td>";
  echo "<td>{$row['agama']}</td>";
  echo "<td>{$row['nama_ortu']}</td>";
  echo "<td>{$row['pekerjaan_ortu']}</td>";
  echo "<td>{$row['alamat_ortu']}</td>";
  echo "<td>{$row['telp_ortu']}</td>";
  echo "<td>{$row['telp_siswa']}</td>";
  echo "<td>{$row['bakat_minat']}</td>";
  echo "<td>{$row['cita_cita']}</td>";
  echo "<td>{$row['mapel_disukai']}</td>";
  echo "<td>{$row['bahasa_dikuasai']}</td>";
  echo "<td>{$row['rencana_setelah_lulus']}</td>";
  echo "</tr>";
  $no++;
}
echo "</table>";
?>