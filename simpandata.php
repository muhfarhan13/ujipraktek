<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_produk = $_POST['nama_produk'];
    $gambar_produk = $_POST['gambar_produk'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO produk (nama_produk, gambar_produk, deskripsi) VALUES ('$nama_produk','$gambar_produk','$deskripsi')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: index.php');
    } else {
        header('Location: simpandata.php?status=gagal');
    }
}
