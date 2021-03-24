<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE from produk WHERE id_produk ='$id'";
$hapus = mysqli_query($connect, $query);

if ($hapus) {
    header('Location: index.php');
} else {
    header('Location: editdata.php?status=gagal');
}
