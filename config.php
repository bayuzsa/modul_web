<?php
$db = "modul_web";
$user = "root";
$pass = "";
$host = "localhost";

$sql = mysqli_connect($host, $user, $pass, $db) or die("Gagal Konek ke Database");