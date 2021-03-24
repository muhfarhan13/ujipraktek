<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_produk = $_POST['nama'];
$gambar = $_POST['gambar'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($connect, "UPDATE produk SET nama_produk='$nama_produk', gambar_produk='$gambar', deskripsi='$deskripsi' WHERE id_produk = $id ");
header("Location: index.php");
