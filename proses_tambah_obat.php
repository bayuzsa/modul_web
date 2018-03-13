<?php
include "config.php";

$jenis_obat = $_POST['jenis_obat'];

$exec = mysqli_query($sql, "insert into jenis_obat values ('', '$jenis_obat')");

if($exec){
    echo "<script>alert('Data anda sudah tersimpan');window.location = 'example.php';</script>";
}else{
    echo "<script>alert('Data anda belum tersimpan');window.location = 'form_obat.php';</script>";
}