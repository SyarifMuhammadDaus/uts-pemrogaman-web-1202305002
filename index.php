<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM toko ORDER BY id DESC");
?>

<html>
<head>    
    <meta charset="UTF-8">
    <title>Etalase Alat</title>
    <link rel="stylesheet" href="style.css">
    <?php include("style.php"); ?> <!-- jika mau dipisah -->
    <?php /* atau langsung tempel CSS global di sini */ ?>
    <style>/* (tempel CSS di atas di sini) */</style>
</head>

<body>
<div class="container">
    <h1>Data Alat Elektromedis</h1>
    <a href="add.php" class="button">+ Tambah Alat</a><br/><br/>

    <table>
  <tr>
    <th>No</th>
    <th>Nama Alat</th>
    <th>Merek</th>
    <th>Tipe</th>
    <th>Harga</th>
    <th>Aksi</th>
  </tr>

  <?php
  $no = 1;
  $result = mysqli_query($mysqli, "SELECT * FROM toko ORDER BY id ASC");
  while($user_data = mysqli_fetch_array($result)) {
  ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $user_data['nama_alat']; ?></td>
      <td><?php echo $user_data['merek']; ?></td>
      <td><?php echo $user_data['tipe']; ?></td>
      <td>Rp <?php echo number_format($user_data['harga'], 0, ',', '.'); ?></td>

      <!-- ⬇️ di sini kamu tempelkan -->
      <td class="action-buttons">
        <a href="edit.php?id=<?php echo $user_data['id']; ?>" class="edit">Edit</a>
        <a href="delete.php?id=<?php echo $user_data['id']; ?>" class="delete">Hapus</a>
      </td>
    </tr>
  <?php } ?>
</table>

</div>
</body>
</html>
