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
    <style>
        body {
            overflow-x: hidden;
        }

        .content {
            border-bottom: 1px solid black;
            margin-left: -12px;
            background-color: white;
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

        .card:hover {
            margin-top: 10px;
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
            margin-left: -12px;
        }

        table {
            margin-left: 26px;
        }

        .overflow {
            overflow-y: scroll;
            overflow-x: hidden;
            width: 26cm;
            height: 570px;
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
                            <h4>Edit Data</h4>
                        </a>
                    </div>
                </nav>
                <div class="overflow">
                    <table class="table text-center mb-5 ">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>ID</th>
                                <th>Nama Produk</th>
                                <th>Gambar Produk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <?php
                            $sql = " SELECT * FROM produk";
                            $query = mysqli_query($connect, $sql);

                            while ($data = mysqli_fetch_array($query)) {
                                echo "<tr>";
                                echo "<td>" . $data['id_produk'] . "</td>";
                                echo "<td>" . $data['nama_produk'] . "</td>";
                                echo "<td><img src='" . $data['gambar_produk'] . "' width='200'></td>";
                                echo "<td>";
                                echo "<a class='btn btn-warning' href='formedit.php?id=" . $data['id_produk'] . "'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                </svg></a> ";
                                echo "<a class='btn btn-danger' href='hapusdata.php?id=" . $data['id_produk'] . "'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                </svg></a> ";
                                echo "</td>";
                                echo "</tr>";
                            }

                            ?>
                        </tbody>
                    </table>
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