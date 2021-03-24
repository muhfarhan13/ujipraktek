<?php
include 'koneksi.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        body {
            overflow-x: hidden;
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
            margin-top: 13px;
        }

        .card:hover {
            box-shadow: -1px 4px 18px 2px black;
        }

        .group-logo {
            background-color: white;
            padding-right: 380px;
            padding-left: 50px;
            margin-left: -20px;
        }

        .bapa-dashboard {
            list-style: none;
            padding-right: 208px;
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
            padding-top: 11px;
            padding-bottom: 10px;
        }

        .navbar-light {
            padding-right: 66em;
        }

        .overflow-card {
            overflow-y: scroll;
            width: 27cm;
            height: 14cm;
            margin-left: 24px;
        }
    </style>

    <title>Hello, world!</title>
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
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <h4>Dashboard</h4>
                        </a>
                    </div>
                </nav>
                <div class="overflow-card">
                    <?php
                    $sql = "SELECT * FROM produk";
                    $query = mysqli_query($connect, $sql);

                    while ($produk = mysqli_fetch_array($query)) {
                        echo '<a href="deskripsi.php?id=' . $produk['id_produk'] . '">';
                        echo '<div class="card bg-dark" style="width: 13rem;">';
                        echo '<img src="' . $produk['gambar_produk'] . '" class="card-img-top" alt="...">';
                        echo '<div class="card-body text-center">';
                        echo '<h4 class="card-text text-white">' . $produk['nama_produk'] . '</h4>';
                        echo '</div>';
                        echo '</div>';
                        echo '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>