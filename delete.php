<?php
include_once("config.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM toko WHERE id = $id");

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menghapus data. Error: " . mysqli_error($mysqli);
    }
} else {
    echo "ID tidak ditemukan.";
}
?>
