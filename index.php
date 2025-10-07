<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Siswa</title>
  <!-- Link ke DataTables dan Font -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #f6f8fa;
      margin: 0;
      padding: 20px;
    }

    .container {
      background: #fff;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      font-weight: 600;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    .btn-custom {
      display: inline-block;
      background: #0d6efd;
      color: white;
      padding: 8px 14px;
      border-radius: 6px;
      text-decoration: none;
      transition: 0.3s;
    }
    .btn-custom:hover {
      background: #084298;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th {
      background: #0d6efd;
      color: white;
      text-align: center;
    }

    td, th {
      padding: 8px;
      font-size: 14px;
      vertical-align: middle;
    }

    tr:nth-child(even) {
      background: #f2f2f2;
    }

    tr:hover {
      background-color: #eaf2ff;
      transition: 0.2s;
    }

    .aksi a {
      padding: 5px 10px;
      border-radius: 5px;
      color: white;
      font-weight: 500;
    }

    .aksi .edit {
      background-color: #ffc107;
    }

    .aksi .hapus {
      background-color: #dc3545;
    }

    .aksi .edit:hover {
      background-color: #e0a800;
    }

    .aksi .hapus:hover {
      background-color: #c82333;
    }

    @media (max-width: 768px) {
      table {
        font-size: 12px;
      }
      h2 {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>📋 Data Siswa</h2>
    <div style="text-align:right; margin-bottom:10px;">
      <a href="tambah.php" class="btn-custom">➕ Tambah Siswa</a>
     <a href="export_excel.php" class="btn-custom" style="background:#198754;">⬇️ Excel</a>
<a href="export_pdf.php" class="btn-custom" style="background:#dc3545;">⬇️ PDF</a>
    </div>
    
    
    

    <div class="table-responsive">
      <table id="tabelSiswa" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>NISN</th>
            <th>L/P</th>
            <th>TTL</th>
            <th>Agama</th>
            <th>Nama Ortu</th>
            <th>Pekerjaan Ortu</th>
            <th>Alamat Ortu</th>
            <th>Telp Ortu</th>
            <th>Telp Siswa</th>
            <th>Bakat & Minat</th>
            <th>Cita-cita</th>
            <th>Mapel Disukai</th>
            <th>Bahasa bisa/ingin dikuasai</th>
            <th>Rencana Setelah Lulus</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $result = $conn->query("SELECT * FROM siswa ORDER BY no_urut ASC");
        $no = 1;
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
              <td>{$no}</td>
              <td>{$row["nama_siswa"]}</td>
              <td>{$row["nis"]}</td>
              <td>{$row["nisn"]}</td>
              <td>{$row["jenis_kelamin"]}</td>
              <td>{$row["tempat_tanggal_lahir"]}</td>
              <td>{$row["agama"]}</td>
              <td>{$row["nama_ortu"]}</td>
              <td>{$row["pekerjaan_ortu"]}</td>
              <td>{$row["alamat_ortu"]}</td>
              <td>{$row["telp_ortu"]}</td>
              <td>{$row["telp_siswa"]}</td>
              <td>{$row["bakat_minat"]}</td>
              <td>{$row["cita_cita"]}</td>
              <td>{$row["mapel_disukai"]}</td>
              <td>{$row["bahasa_dikuasai"]}</td>
              <td>{$row["rencana_setelah_lulus"]}</td>
              <td class='aksi text-center'>
                <a href='edit.php?id={$row["id"]}' class='edit'>✏️</a>
                <a href='hapus.php?id={$row["id"]}' class='hapus' onclick=\"return confirm('Yakin hapus data?')\">🗑️</a>
              </td>
            </tr>";
          $no++;
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Script DataTables -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tabelSiswa').DataTable({
        "language": {
          "lengthMenu": "Tampilkan _MENU_ data per halaman",
          "zeroRecords": "Tidak ditemukan data",
          "info": "Menampilkan _START_ - _END_ dari _TOTAL_ data",
          "infoEmpty": "Tidak ada data tersedia",
          "search": "Cari:",
          "paginate": {
            "first": "Pertama",
            "last": "Terakhir",
            "next": "▶",
            "previous": "◀"
          }
        },
        "pageLength": 10
      });
    });
  </script>
</body>
</html>