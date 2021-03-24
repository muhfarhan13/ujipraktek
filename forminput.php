<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(244, 244, 244);
            overflow-x: hidden;
        }

        form p {
            text-align: center;
            font-size: 20px;
            font-weight: 600;
            padding-top: 30px;
        }

        .input-group {
            margin-top: 10px;
            margin-right: 200px;
        }

        .form-control {
            border: none;
            box-shadow: 3px 4px gainsboro;
        }

        .label-group {
            line-height: 55px;
            margin-left: 20px;
        }

        .button input {
            margin-left: 20px;
            width: 888px;
        }

        .content {
            border-bottom: 1px solid black;
            margin-left: -12px;
        }

        .menu {
            background-color: #2a2b36;
            height: 700px;
            width: 260px;
            box-shadow: -1px 4px 18px 2px black;
        }

        .card {
            float: left;
            margin-left: 20px;
        }

        .group-logo {
            background-color: white;
            padding-right: 380px;
            padding-left: 50px;
            margin-left: -20px;
        }

        .bapa-dashboard {
            list-style: none;
            padding-right: 208.5px;
            padding-top: 12px;
            padding-bottom: 16px;
            padding-left: 70px;
            margin-top: 1cm;
            margin-left: -30px;

        }

        .bapa-dashboard:hover {
            background-color: blue;
        }

        .dashboard a {
            text-decoration: none;
            color: white;
        }

        .dropdon {
            padding-right: 222px;
            padding-top: 12px;
            padding-bottom: 16px;
            padding-left: 56px;
            margin-left: -30px;
        }

        .dropdon:hover {
            background-color: blue;
        }

        .navbar-brand {
            height: 34px;
        }

        .navbar-light {
            height: 74.2px;
            padding-top: 20px;
            width: 27cm;
        }

        .navbar-title {
            margin-left: 26px;
        }

        .formnya {
            width: 24cm;
            margin-left: 30px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 menu">
                <div class="group-logo">
                    <a class="navbar-brand" href="dashboard.html">
                        <b class="logo-icon">
                            <img src="../template/plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <span class="logo-text">
                            <img src="../img/amin2.png" style="width: 120px;" alt="homepage" />
                        </span>
                    </a>
                </div>
                <div class="bapa-dashboard">
                    <li class="dashboard">
                        <a href="index.php">Dashboard</a>
                    </li>
                </div>
                <div class="dropdon">
                    <button class="btn btn-transparent dropdown-toggle text-white" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Data Master
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="forminput.php">Tambah Data</a></li>
                        <li><a class="dropdown-item" href="editdata.php">Edit Data</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-9 content">
                <!-- Just an image -->
                <nav class="navbar navbar-light bg-light mb-5">
                    <div class="navbar-title">
                        <a class="navbar-brand" href="forminput.php">
                            <h4>Tambah Data</h4>
                        </a>
                    </div>
                </nav>
                <div class="formnya">
                    <form action="simpandata.php" method="POST">
                        <div class="row">
                            <div class="col-4">
                                <div class="label-group">
                                    <label>Nama</label>
                                </div>
                                <div class="label-group">
                                    <label>Gambar</label>
                                </div>
                                <div class="label-group">
                                    <label>Deskripsi</label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="input-group">
                                    <input type="text" class="form-control mb-2" name="nama_produk" id="nama_produk" placeholder="Nama produk">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control mb-2" name="gambar_produk" id="gambar_produk" validation placeholder="Url Gambar">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control mb-2" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
                                </div>
                            </div>
                            <div class="button">
                                <input type="submit" name="simpan" value="Tambah" class="btn btn-primary mt-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>