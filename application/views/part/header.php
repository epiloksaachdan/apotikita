<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>apotikita</title>
    <STYLE type="text/css">
        #c1 {
            top: 45%;
            left: 1%;
            background: #34495E;
            color: #ABEBC6;
        }

        #c2 {
            left: 30%;
            bottom: 55%;
            background: #34495E;
            color: #ABEBC6;
        }

        #c3 {
            bottom: 155%;
            left: 60%;
            background: #34495E;
            color: #ABEBC6;
        }

        .card:hover {
            box-shadow: 0 6px 10px 0px rgba(0, 0, 0, 1);
            cursor: pointer;
        }

        footer {
            background-color: black;
            padding: 0px;
            margin: 0px;
        }
    </STYLE>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= base_url('main/dashboard') ?>">APOTIKITA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls=" navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('main/dashboard') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        OBAT
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('main/dataobat') ?>">DATA OBAT</a>
                        <a class="dropdown-item" href="<?= base_url('main/tambahobat') ?>">TAMBAH OBAT</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SUPLIER
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('main/datasuplier') ?>">DATA SUPLIER</a>
                        <a class="dropdown-item" href="<?= base_url('main/tambahsuplier') ?>">TAMBAH SUPLIER</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ADMIN
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">DATA ADMIN</a>
                        <a class="dropdown-item" href="#">TAMBAH ADMIN</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="<?= base_url('main/logout') ?>">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>