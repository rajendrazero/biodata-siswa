<?php
include "config.php";
require_once __DIR__ . '/vendor/autoload.php';

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 10);

// Header Judul
$html = '
<h3 style="text-align:center;">DATA SISWA</h3>
<h4 style="text-align:center;">SMK NEGERI 9 MEDAN</h4>
<h5 style="text-align:center;">TAHUN AJARAN 2025/2026</h5>
<br><br>
<table border="1" cellpadding="4">
<thead>
<tr style="background-color:#FFD700; font-weight:bold; text-align:center;">
<th width="25">No</th>
<th width="80">Nama Siswa</th>
<th width="60">NIS</th>
<th width="60">NISN</th>
<th width="25">L/P</th>
<th width="80">TTL</th>
<th width="50">Agama</th>
<th width="80">Nama Ortu</th>
<th width="70">Pekerjaan</th>
<th width="80">Alamat</th>
<th width="60">Telp Ortu</th>
<th width="60">Telp Siswa</th>
<th width="70">Bakat & Minat</th>
<th width="70">Cita-cita</th>
<th width="80">Mapel Disukai</th>
<th width="60">Bahasa</th>
<th width="60">Rencana</th>
</tr>
</thead>
<tbody>
';

$result = $conn->query("SELECT * FROM siswa ORDER BY no_urut ASC");
$no = 1;
while ($row = $result->fetch_assoc()) {
    $html .= "<tr>
        <td>$no</td>
        <td>{$row['nama_siswa']}</td>
        <td>{$row['nis']}</td>
        <td>{$row['nisn']}</td>
        <td>{$row['jenis_kelamin']}</td>
        <td>{$row['tempat_tanggal_lahir']}</td>
        <td>{$row['agama']}</td>
        <td>{$row['nama_ortu']}</td>
        <td>{$row['pekerjaan_ortu']}</td>
        <td>{$row['alamat_ortu']}</td>
        <td>{$row['telp_ortu']}</td>
        <td>{$row['telp_siswa']}</td>
        <td>{$row['bakat_minat']}</td>
        <td>{$row['cita_cita']}</td>
        <td>{$row['mapel_disukai']}</td>
        <td>{$row['bahasa_dikuasai']}</td>
        <td>{$row['rencana_setelah_lulus']}</td>
    </tr>";
    $no++;
}

$html .= '</tbody></table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Data_Siswa_2025_2026.pdf', 'D');
?>