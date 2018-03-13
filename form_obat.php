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
        <h2>Form Tambah Jenis Obat</h2>
        <form action="proses_tambah_obat.php" method="post">
            <table class="table table-bordered table-hover">
                <tr>
                    <td>Jenis obat</td>
                    <td>:</td>
                    <td><input type="text" name="jenis_obat" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td><!-- &nbsp; ini digunakan untuk spasi dalam tag HTML -->
                    <td>
                        <button type="submit" class="btn btn-sm btn-primary"><span class="fas fa-save"></span> Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
