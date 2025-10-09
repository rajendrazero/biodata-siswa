<?php 
include 'config.php'; 
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM siswa WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Siswa</title>
  <style>
    /* === RESET & DASAR === */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #f6f8fa;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      padding: 40px 10px;
    }

    /* === KONTENER FORM === */
    .form-container {
      background: #fff;
      width: 100%;
      max-width: 650px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 30px 35px;
      animation: fadeIn 0.4s ease;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
      letter-spacing: 0.5px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: 600;
      color: #444;
      display: block;
      margin-bottom: 6px;
    }

    input[type="text"],
    input[type="number"],
    select,
    textarea {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      transition: all 0.2s ease;
    }

    input:focus,
    select:focus,
    textarea:focus {
      border-color: #0078d7;
      box-shadow: 0 0 4px rgba(0, 120, 215, 0.4);
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 70px;
    }

    /* === TOMBOL === */
    input[type="submit"] {
      background: #0078d7;
      color: white;
      border: none;
      padding: 12px 0;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: 0.25s ease;
    }

    input[type="submit"]:hover {
      background: #005fa3;
    }

    /* === RESPONSIVE === */
    @media (max-width: 600px) {
      .form-container {
        padding: 25px 20px;
      }

      input[type="submit"] {
        font-size: 15px;
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Edit Data Siswa</h2>
    <form method="post">
      <div>
        <label>Nama Siswa</label>
        <input type="text" name="nama_siswa" value="<?= htmlspecialchars($data['nama_siswa']) ?>" required>
      </div>

      <div>
        <label>NIS</label>
        <input type="text" name="nis" value="<?= htmlspecialchars($data['nis']) ?>">
      </div>

      <div>
        <label>NISN</label>
        <input type="text" name="nisn" value="<?= htmlspecialchars($data['nisn']) ?>">
      </div>

      <div>
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin">
          <option value="L" <?= $data['jenis_kelamin']=='L'?'selected':'' ?>>Laki-laki</option>
          <option value="P" <?= $data['jenis_kelamin']=='P'?'selected':'' ?>>Perempuan</option>
        </select>
      </div>

      <div>
        <label>Tempat Tanggal Lahir</label>
        <input type="text" name="ttl" value="<?= htmlspecialchars($data['tempat_tanggal_lahir']) ?>">
      </div>

      <div>
        <label>Agama</label>
        <input type="text" name="agama" value="<?= htmlspecialchars($data['agama']) ?>">
      </div>

      <div>
        <label>Nama Orang Tua</label>
        <input type="text" name="nama_ortu" value="<?= htmlspecialchars($data['nama_ortu']) ?>">
      </div>

      <div>
        <label>Pekerjaan Ortu</label>
        <input type="text" name="pekerjaan_ortu" value="<?= htmlspecialchars($data['pekerjaan_ortu']) ?>">
      </div>

      <div>
        <label>Alamat Orang Tua</label>
        <textarea name="alamat_ortu"><?= htmlspecialchars($data['alamat_ortu']) ?></textarea>
      </div>

      <div>
        <label>Telp Ortu</label>
        <input type="text" name="telp_ortu" value="<?= htmlspecialchars($data['telp_ortu']) ?>">
      </div>

      <div>
        <label>Telp Siswa</label>
        <input type="text" name="telp_siswa" value="<?= htmlspecialchars($data['telp_siswa']) ?>">
      </div>

      <div>
        <label>Bakat & Minat</label>
        <input type="text" name="bakat_minat" value="<?= htmlspecialchars($data['bakat_minat']) ?>">
      </div>

      <div>
        <label>Cita-cita</label>
        <input type="text" name="cita_cita" value="<?= htmlspecialchars($data['cita_cita']) ?>">
      </div>

      <div>
        <label>Mapel Disukai</label>
        <input type="text" name="mapel_disukai" value="<?= htmlspecialchars($data['mapel_disukai']) ?>">
      </div>

      <div>
        <label>Bahasa Dikuasai</label>
        <input type="text" name="bahasa_dikuasai" value="<?= htmlspecialchars($data['bahasa_dikuasai']) ?>">
      </div>

      <div>
        <label>Rencana Setelah Lulus</label>
        <select name="rencana">
          <option value="KERJA" <?= $data['rencana_setelah_lulus']=='KERJA'?'selected':'' ?>>KERJA</option>
          <option value="KULIAH" <?= $data['rencana_setelah_lulus']=='KULIAH'?'selected':'' ?>>KULIAH</option>
          <option value="USAHA" <?= $data['rencana_setelah_lulus']=='USAHA'?'selected':'' ?>>USAHA</option>
        </select>
      </div>

      <input type="submit" name="update" value="Update">
    </form>
  </div>

  <?php
  if (isset($_POST['update'])) {
    $sql = "UPDATE siswa SET 
      nama_siswa=?, nis=?, nisn=?, jenis_kelamin=?, tempat_tanggal_lahir=?, 
      agama=?, nama_ortu=?, pekerjaan_ortu=?, alamat_ortu=?, telp_ortu=?, 
      telp_siswa=?, bakat_minat=?, cita_cita=?, mapel_disukai=?, bahasa_dikuasai=?, 
      rencana_setelah_lulus=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $success = $stmt->execute([
      $_POST['nama_siswa'], $_POST['nis'], $_POST['nisn'], $_POST['jenis_kelamin'],
      $_POST['ttl'], $_POST['agama'], $_POST['nama_ortu'], $_POST['pekerjaan_ortu'],
      $_POST['alamat_ortu'], $_POST['telp_ortu'], $_POST['telp_siswa'],
      $_POST['bakat_minat'], $_POST['cita_cita'], $_POST['mapel_disukai'],
      $_POST['bahasa_dikuasai'], $_POST['rencana'], $id
    ]);

    if ($success) {
      echo "<script>alert('✅ Data berhasil diupdate!');window.location='index.php';</script>";
    } else {
      echo "<script>alert('❌ Gagal update data!');</script>";
    }
  }
  ?>
</body>
</html>
