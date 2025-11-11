<?php
include_once("config.php");

if(isset($_POST['update'])) {   
    $id = $_POST['id'];
    $nama_alat = $_POST['nama_alat'];
    $merek = $_POST['merek'];
    $tipe = $_POST['tipe'];
    $harga = str_replace('.', '', $_POST['harga']); 

    mysqli_query($mysqli, "UPDATE toko SET nama_alat='$nama_alat', merek='$merek', tipe='$tipe', harga='$harga' WHERE id=$id");
    header("Location: index.php");
}

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM toko WHERE id=$id");
$data = mysqli_fetch_array($result);
?>

<html>
<head>  
    <meta charset="UTF-8">
    <title>Edit Alat</title>
    <link rel="stylesheet" href="style.css">
    <style>/* tempel CSS di atas */</style>
</head>

<body>
<div class="container">
    <h1>Edit Data Alat</h1>
    <a href="index.php">← Kembali ke Daftar</a>
    <br/><br/>

    <form method="post" action="edit.php">
        <table width="100%">
            <tr> 
                <td>Nama Alat</td>
                <td><input type="text" name="nama_alat" value="<?php echo $data['nama_alat'];?>" required></td>
            </tr>
            <tr> 
                <td>Merek</td>
                <td><input type="text" name="merek" value="<?php echo $data['merek'];?>" required></td>
            </tr>
            <tr> 
                <td>Tipe</td>
                <td><input type="text" name="tipe" value="<?php echo $data['tipe'];?>" required></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo number_format($data['harga'], 0, ',', '.');?>" required></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $data['id'];?>"></td>
                <td><input type="submit" name="update" value="Update" class="button"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
