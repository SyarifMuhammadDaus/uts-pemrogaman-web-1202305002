<html>
<head>
    <meta charset="UTF-8">
    <title>Tambah Alat</title>
    <link rel="stylesheet" href="style.css">
    <style>/* tempel CSS di atas */</style>
</head>

<body>
<div class="container">
    <h1>Tambah Alat Baru</h1>
    <a href="index.php">← Kembali ke Daftar</a>
    <br/><br/>

    <form action="add.php" method="post">
        <table width="100%">
            <tr> 
                <td>Nama Alat</td>
                <td><input type="text" name="nama_alat" required></td>
            </tr>
            <tr> 
                <td>Merek</td>
                <td><input type="text" name="merek" required></td>
            </tr>
            <tr> 
                <td>Tipe</td>
                <td><input type="text" name="tipe" required></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" placeholder="contoh: 2.000.000" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah" class="button"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        include_once("config.php");
        $nama_alat = $_POST['nama_alat'];
        $merek = $_POST['merek'];
        $tipe = $_POST['tipe'];
        $harga = str_replace('.', '', $_POST['harga']);
        mysqli_query($mysqli, "INSERT INTO toko(nama_alat,merek,tipe,harga) VALUES('$nama_alat','$merek','$tipe','$harga')");
        echo "<p>✅ Data berhasil ditambahkan. <a href='index.php'>Lihat Daftar</a></p>";
    }
    ?>
</div>
</body>
</html>
