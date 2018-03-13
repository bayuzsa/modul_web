<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Modul WEB</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/font-awsome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bower_components/bootstrap/dist/css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Judul Program</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">List Data <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container">
    <div class="jumbotron">
        <h2>Contoh List Data dalam bentuk Table</h2>
        <table class="table table-bordered table-hover table-light">
            <thead>
                <tr>
                    <th width="5%"><b>NO</b></th>
                    <th><b>JENIS OBAT</b></th>
                    <th colspan="2" width="15%">
                        <div class="btn btn-sm btn-block btn-primary" onclick="window.location = 'form_obat.php'"><span class="fas fa-plus-square"></span></div>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                include 'config.php';
                $no = 1;
                $exec = mysqli_query($sql, "select * from jenis_obat");
                while($data = mysqli_fetch_array($exec)){
            ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['jenis_obat'] ?></td>
                        <td>
                            <a href="#?id=<?= $data['id_jenis'] ?>" class="btn btn-xs btn-primary">
                                <span class="fas fa-edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="#?id=<?= $data['id_jenis'] ?>" class="btn btn-xs btn-danger">
                                <span class="fas fa-trash"></span>
                            </a>
                        </td>
                    </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
